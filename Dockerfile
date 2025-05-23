# ===== Stage 1: Build React/Vite =====
FROM node:18 AS node-build
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build





# ===== Stage 2: Composer install =====
FROM composer:2 AS vendor
WORKDIR /app
COPY . .
 # ✅ Fix: cần cả artisan + composer.json
RUN composer install --no-dev --optimize-autoloader

# ===== Stage 3: Laravel + Apache =====
FROM php:8.2-apache

# Cài extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    git zip unzip curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Copy Laravel app
COPY . /var/www/html

# Copy vendor từ stage composer
COPY --from=vendor /app/vendor /var/www/html/vendor

# Copy React build vào public (nếu React build ra thư mục public)
COPY --from=node-build /app/public /var/www/html/public

# Tạo file .env nếu chưa có
RUN if [ ! -f /var/www/html/.env ]; then cp /var/www/html/.env.example /var/www/html/.env; fi

# Chạy lệnh để clear và cache config Laravel (nếu cần)
RUN php /var/www/html/artisan config:clear
RUN php /var/www/html/artisan config:cache

# Đảm bảo quyền
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Cấu hình Apache
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
 && a2enmod rewrite

# Set quyền cho Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Chạy các lệnh artisan cần thiết
RUN php /var/www/html/artisan key:generate
RUN php /var/www/html/artisan config:clear
RUN php /var/www/html/artisan config:cache
RUN php /var/www/html/artisan route:clear
RUN php /var/www/html/artisan view:clear

EXPOSE 80
