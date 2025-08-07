FROM php:8.4-fpm

# Install basic dependencies and tools
RUN apt-get update && apt-get install -y \
    apt-transport-https \
    gnupg2 \
    curl \
    unixodbc \
    unixodbc-dev \
    gcc \
    g++ \
    make \
    autoconf \
    libc-dev \
    pkg-config \
    software-properties-common \
    && rm -rf /var/lib/apt/lists/*

# Install additional PHP extensions
RUN pecl install redis && docker-php-ext-enable redis
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Install the ODBC driver for MySQL
RUN apt-get update && apt-get install -y unixodbc unixodbc-dev && rm -rf /var/lib/apt/lists/*

# Install PHP Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Set the permissions for the web root directory
RUN mkdir -p /var/www/temp/site /var/www/logs /var/www/cache /var/www/html/temp /var/www/html/cache \
    && chmod -R 0777 /var/www/logs /var/www/temp /var/www/temp/site /var/www/html/temp /var/www/html/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 0777 /var/www/html

# Expose the port that PHP-FPM listens on
EXPOSE 9000

