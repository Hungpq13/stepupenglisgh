FROM php:8.2-apache

# Cài extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    git zip unzip curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set document root là /var/www/html/public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Override Apache config để trỏ đúng thư mục public/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Copy project vào container
COPY . /var/www/html

# Phân quyền (nếu cần)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Enable Apache rewrite module (Laravel cần)
RUN a2enmod rewrite
