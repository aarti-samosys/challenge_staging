FROM php:8.0-fpm-alpine

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-install opcache

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD docker/php-fpm/opcache.ini '$PHP_INI_DIR/conf.d/opcache.ini'

COPY . /var/www

RUN addgroup -g 1000 www

RUN adduser -S www -G www -u 1000

COPY --chown=www:www . /var/www

USER www
