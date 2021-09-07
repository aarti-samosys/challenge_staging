FROM php:8.0-cli-alpine

RUN apk add --no-cache --upgrade bash

RUN docker-php-ext-install pdo_mysql

COPY ./docker/entrypoints /usr/local/bin

RUN chmod +x -R /usr/local/bin

COPY . /var/www

RUN addgroup -g 1000 www

RUN adduser -S www -G www -u 1000

COPY --chown=www:www . /var/www

USER www
