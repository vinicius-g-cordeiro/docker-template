FROM php:8.4-fpm

# Instala dependências básicas + ODBC
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

# Adiciona o repositório da Microsoft para o ODBC Driver
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - && \
    curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list && \
    apt-get update && \
    ACCEPT_EULA=Y apt-get install -y msodbcsql17

# Instala extensões PHP para SQL Server (pdo_sqlsrv e sqlsrv)
RUN pecl install sqlsrv-8.2.0 pdo_sqlsrv-8.2.0 \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv

# Opcional: também pode ativar o pdo_odbc se quiser usar via ODBC diretamente
RUN docker-php-ext-configure pdo_odbc --with-pdo-odbc=unixODBC,/usr && \
    docker-php-ext-install pdo_odbc 

# Install Xdebug
RUN pecl install xdebug-3.2.1 && \
    docker-php-ext-enable xdebug

# Configure Xdebug
RUN echo "zend_extension=xdebug.so" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.mode=develop,debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www/html

# Cria e ajusta permissões dos diretórios
RUN mkdir -p /var/www/temp/site /var/www/logs /var/www/cache /var/www/html/temp /var/www/html/cache \
    && chmod -R 0777 /var/www/logs /var/www/temp /var/www/temp/site /var/www/html/temp /var/www/html/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 0777 /var/www/html
