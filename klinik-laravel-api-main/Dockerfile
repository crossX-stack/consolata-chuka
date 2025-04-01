# Use official PHP 8.3 image with Apache
FROM php:8.3-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN apt-get update && \
    apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libzip-dev \
        zip \
        unzip \
        git \
        curl \
        libpq-dev \
        nano && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd pdo pdo_mysql pdo_pgsql zip opcache && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copy custom php.ini
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy Apache configuration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite for Laravel
RUN a2enmod rewrite && a2enmod headers

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy only composer files first for better caching
COPY composer.json composer.lock ./ 

# Install Laravel dependencies
RUN composer install --no-dev --no-scripts --optimize-autoloader

# Copy all files
COPY . .

# Ensure required directories exist
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/uploads

# Set permissions for existing www-data user
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/uploads

# Run composer scripts
RUN composer run-script post-install-cmd

# Generate Laravel optimizations
RUN php artisan optimize:clear

# Copy startup script
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80
CMD ["/bin/bash", "/start.sh"]
