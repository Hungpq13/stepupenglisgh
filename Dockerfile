# Sử dụng PHP-FPM image
FROM php:8.1-fpm

# Cài đặt các extension PHP cần thiết
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git curl

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài đặt các extension PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install gd

# Sao chép mã nguồn vào container
COPY . /var/www/html

WORKDIR /var/www/html

# Cài đặt các phụ thuộc của Laravel
RUN composer install --no-dev --optimize-autoloader

# Chạy các lệnh Artisan
RUN php artisan key:generate
RUN php artisan migrate --force

# Cấu hình NGINX để phục vụ ứng dụng
CMD ["php-fpm"]
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache

EXPOSE 9000

ENTRYPOINT ["php-fpm"]
