FROM php:8.2-apache

# Cài extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    git zip unzip curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql
#  Build React (nếu có)
FROM node:18 AS node-build
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
# Nếu bạn dùng Vite hoặc Mix để build React
RUN npm run build
# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set document root là /var/www/html/public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Override Apache config để trỏ đúng thư mục public/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/000-default.conf \
 && a2enmod rewrite

# Sao chép source code vào container
COPY . /var/www/html

# Chạy composer install để tạo vendor/
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader

# Phân quyền thư mục
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose cổng 80 để truy cập web
EXPOSE 80
