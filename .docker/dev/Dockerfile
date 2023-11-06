FROM php:8.2-apache

ENV NODE_MAJOR=20

ARG USER_ID
ARG USER_NAME

WORKDIR "/var/www/html"

RUN apt-get update && apt-get install -y ca-certificates curl gnupg
RUN mkdir -p /etc/apt/keyrings
RUN curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg

RUN echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_MAJOR.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list

RUN apt-get update && apt-get -y install nodejs && apt-get -y autoremove && apt-get clean

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions xdebug @composer

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY ".docker/dev/apache2.conf" "/etc/apache2/apache2.conf"
COPY ".docker/dev/php-extra.ini" "$PHP_INI_DIR/conf.d/php-extra.ini"

RUN a2enmod headers

RUN useradd --create-home --shell /bin/bash -U $USER_NAME -u $USER_ID

USER $USER_NAME
