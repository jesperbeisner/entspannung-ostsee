FROM node:20-alpine AS assets

WORKDIR "/app"

COPY . .

RUN npm install-clean && npm run build

FROM composer:latest AS composer

WORKDIR "/app"

COPY . .

RUN composer install --optimize-autoloader --no-dev

FROM php:8.2-apache

WORKDIR "/var/www/html"

ARG USER_NAME=entspannung
ARG USER_ID=1000

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions opcache @composer

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY ".docker/prod/apache2.conf" "/etc/apache2/apache2.conf"
COPY ".docker/prod/php-extra.ini" "$PHP_INI_DIR/conf.d/php-extra.ini"

RUN a2enmod headers

RUN useradd --create-home --shell /bin/bash -U $USER_NAME -u $USER_ID

COPY . .

RUN chown -R $USER_NAME:$USER_NAME .

COPY --chown=$USER_NAME:$USER_NAME --from=assets /app/public public
COPY --chown=$USER_NAME:$USER_NAME --from=composer /app/vendor vendor

USER $USER_NAME
