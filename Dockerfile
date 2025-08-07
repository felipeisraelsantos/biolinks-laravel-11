FROM php:8.2-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y     zip unzip curl git libpq-dev libzip-dev libpng-dev libonig-dev libxml2-dev libsqlite3-dev     && docker-php-ext-install pdo pdo_mysql pdo_pgsql pdo_sqlite gd zip

COPY . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

CMD ["php-fpm"]
