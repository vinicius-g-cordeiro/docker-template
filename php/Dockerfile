FROM php:8.4-fpm

# Install basic dependencies and tools 
# This includes tools for building PHP extensions and other utilities
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

# The extensions that are installed are:
# - bcmath
# - calendar
# - exif
# - gd
# - intl
# - mbstring
# - mysqli
# - opcache
# - pcntl
# - pdo_mssql
# - pdo_mysql
# - pdo_pgsql
# - soap
# - sockets
# - zip
# - xdebug
# - curl
# Install PHP extensions and enable them 
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd intl mbstring pdo_mysql mysqli opcache pcntl soap sockets zip xdebug curl \
    && docker-php-ext-enable gd intl mbstring pdo_mysql mysqli opcache pcntl soap sockets zip xdebug curl
# Install additional PHP extensions

# Install Redis PHP extension
# This extension is used for caching and session management
RUN pecl install redis && \
    docker-php-ext-enable redis

# Install PHP extensions and mongodb
RUN pecl install zlib zip mongodb \
    && docker-php-ext-enable zip \
    && docker-php-ext-enable mongodb

# Install the ODBC driver for MySQL
RUN apt-get update && \
    apt-get install -y unixodbc unixodbc-dev && \
    rm -rf /var/lib/apt/lists/*

# Install Xdebug
RUN pecl install xdebug-3.2.1 && \
    docker-php-ext-enable xdebug

# Configure Xdebug
RUN echo "zend_extension=xdebug.so" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.mode=develop,debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install PHP Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Set the permissions for the web root directory 
# This ensures that the web server can write to the necessary directories
# and that the PHP-FPM user has the correct permissions
RUN mkdir -p /var/www/temp/site /var/www/logs /var/www/cache /var/www/html/temp /var/www/html/cache \
    && chmod -R 0777 /var/www/logs /var/www/temp /var/www/temp/site /var/www/html/temp /var/www/html/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 0777 /var/www/html

# Expose the port that PHP-FPM listens on
EXPOSE 9000
