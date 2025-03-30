#!/bin/bash

# Clear & cache Laravel config
php artisan config:clear
php artisan cache:clear
php artisan config:cache
php artisan route:clear
php artisan view:clear

# Run database migrations
php artisan migrate --force

# Start Apache server
apache2-foreground
