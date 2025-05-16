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
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# ===== Stage 3: Laravel + Apache =====
FROM php:8.2-apache

# Cài extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    git zip unzip curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Copy Composer từ stage vendor
COPY --from=vendor /app/vendor /var/www/html/vendor

# Copy Laravel source code
COPY . /var/www/html

# Copy React build vào public (giả sử React build nằm trong /public sau `npm run build`)
COPY --from=node-build /app/public /var/www/html/public

# Cấu hình Apache để trỏ vào thư mục public/
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
 && a2enmod rewrite

# Set quyền cho Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Mở cổng 80
EXPOSE 80
