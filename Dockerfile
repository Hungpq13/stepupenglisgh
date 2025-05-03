FROM php:8.2-fpm

# Cài tiện ích hệ thống và PHP extensions
RUN apt-get update && apt-get install -y \
    zip unzip curl libzip-dev libonig-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy mã nguồn Laravel vào container
WORKDIR /var/www
COPY . .

# Cài Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Tạo file .env và generate key
RUN cp .env.example .env && php artisan key:generate

# Laravel permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
