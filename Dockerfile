FROM php:8.1-fpm-alpine

WORKDIR /var/www/html

# Cài đặt các dependencies hệ thống và PHP extensions cần thiết
RUN apk add --no-cache --install-if-missing \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    && docker-php-ext-install -j$(nproc) \
    pdo pdo_mysql zip intl mbstring \
    && docker-php-ext-enable pdo_mysql intl mbstring

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Sao chép source code ứng dụng
COPY . .

# Cài đặt các dependencies PHP
RUN composer install --no-dev --optimize-autoloader

# Tạo file .env từ .env.example (nếu cần)
RUN cp .env.example .env

# Tạo application key
RUN php artisan key:generate

# Chỉnh quyền thư mục
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache

EXPOSE 9000

ENTRYPOINT ["php-fpm"]
