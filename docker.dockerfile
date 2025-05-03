# Dùng PHP 8.1 FPM làm base image
FROM php:8.1-fpm

# Cài các package hệ thống cần thiết
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Tạo thư mục làm việc trong container
WORKDIR /var/www/html

# Copy toàn bộ source code vào container
COPY . .

# Cài đặt Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Tạo app key
RUN php artisan key:generate

# Expose port 8000
EXPOSE 8000

# Command chạy server Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
