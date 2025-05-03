# 1. Dùng image PHP có sẵn
FROM php:8.1-cli

# 2. Cài extension và tool cần thiết
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql zip

# 3. Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Tạo thư mục ứng dụng
WORKDIR /app

# 5. Copy toàn bộ mã nguồn
COPY . .

# 6. Cài đặt Laravel
RUN composer install --no-dev --optimize-autoloader

# 7. Tạo app key nếu chưa có
RUN php artisan key:generate || true

# 8. Mở cổng
EXPOSE 8000

# 9. Chạy Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
