# Base image PHP + Composer
FROM php:8.1-cli

# Install system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy source code
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate application key
RUN php artisan key:generate || true

# Expose port 8000
EXPOSE 8000

# Run Laravel dev server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
