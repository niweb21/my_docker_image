FROM php:7.0-apache

RUN apt-get update \
    && apt-get install -y \
        libicu-dev \
        zlib1g-dev

RUN docker-php-ext-install \
    intl \
    mbstring \
    mysqli \
    zip

RUN mkdir -p /usr/src/php/ext

RUN curl -L -o /tmp/xdebug-2.4.1.tgz http://xdebug.org/files/xdebug-2.4.1.tgz \
&& tar xfz /tmp/xdebug-2.4.1.tgz \
&& rm -r /tmp/xdebug-2.4.1.tgz \
&& mv xdebug-2.4.1 /usr/src/php/ext/xdebug \
&& docker-php-ext-install xdebug

RUN usermod -u 1000 www-data
