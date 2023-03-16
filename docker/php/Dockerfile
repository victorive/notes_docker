FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    libpng-dev \
    libzip-dev \
    zip

RUN docker-php-ext-install \
    pdo_mysql \
    pdo_pgsql \
    intl \
    gd \
    zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs

WORKDIR /var/www/html

COPY . .

EXPOSE 9000

RUN composer install --no-dev --optimize-autoloader --no-interaction

CMD ["php-fpm"]
