#########################
# 1. Build Frontend
#########################
FROM node:18 AS frontend

# Create a folder for the frontend
WORKDIR /app

# Copy only package-lock.json + package.json first for caching
COPY package*.json ./

# Install Node modules
RUN npm install

# Now copy the entire project to build the assets
COPY . .

# Build for production (Vite)
RUN npm run build


#########################
# 2. Build PHP / Laravel
#########################
FROM php:8.2-fpm

# Install system packages + PHP extensions
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

# Copy Composer from the official composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create and switch to our working directory
WORKDIR /var/www

# Copy only composer files for caching
COPY composer.json composer.lock ./



# Now copy in the rest of the source code (including artisan, .env, etc.)
COPY . .

# Copy final Vite-built assets from the frontend stage
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix permissions (optional, good for shared hosting or certain OS setups)
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# Expose port 8000 for "php artisan serve"
EXPOSE 8000

# Launch Laravel on container start
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
