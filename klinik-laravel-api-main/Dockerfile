# Use official PHP 8.3 image with Apache
FROM php:8.3-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies and PHP extensions (keeping nano)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    nano \  # <-- Nano explicitly kept here
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql pdo_pgsql zip opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copy custom php.ini to ensure it's always loaded
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy Apache configuration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite for Laravel
RUN a2enmod rewrite && a2enmod headers

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy only composer files first for better caching
COPY composer.json composer.lock ./

# Install Laravel dependencies (no scripts to prevent early errors)
RUN composer install --no-dev --no-scripts --optimize-autoloader

# Copy all files (except those in .dockerignore)
COPY . .

# Set correct permissions for Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache \
    && chmod -R 775 public/uploads

# Run composer scripts after files are copied
RUN composer run-script post-install-cmd

# Generate Laravel optimizations
RUN php artisan optimize:clear

# Copy the startup script & give it execution permission
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Expose port 80
EXPOSE 80

# Run Laravel commands & start Apache
CMD ["/bin/bash", "/start.sh"]
