# Use official PHP 8.3 image with Apache
FROM php:8.3-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    nano \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql

# Copy custom php.ini to ensure it's always loaded
COPY php.ini /usr/local/etc/php/php.ini

# Copy Apache configuration to make changes persistent
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite for Laravel
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel project files
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set correct permissions for Laravel storage & cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Persist Laravel environment setup
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan config:cache \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan migrate --force

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]


