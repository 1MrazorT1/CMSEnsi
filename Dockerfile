#########################
# 1. Build Frontend
#########################
FROM node:18 AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


#########################
# 2. Build Backend (Laravel)
#########################
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip

# Add Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files first for layer caching
COPY composer.json composer.lock ./



# Copy application files
COPY . .

# Copy frontend build from previous stage
COPY --from=frontend /app/public/build ./public/build



# Ensure correct permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Laravel needs the .env to exist and app key to be generated
COPY .env.example .env

# Install PHP dependencies without dev
RUN composer install --no-dev --optimize-autoloader 

RUN php artisan key:generate

# Expose Laravel's default serve port
EXPOSE 8000

# Start Laravel
CMD ["php", "artisan", "migrate", "&&","php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
