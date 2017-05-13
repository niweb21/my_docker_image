FROM ubuntu:16.04

ENV LANG C.UTF-8
ENV LANGUAGE C:en
ENV LC_ALL C.UTF-8

RUN apt-get update \
    && apt-get install -y software-properties-common \
    && add-apt-repository -y ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y \
        curl \
        apache2 \
        php7.1 \
        libapache2-mod-php7.1 \
        php7.1-cli \
        php7.1-mbstring \
        php7.1-zip \
        php7.1-intl \
        php7.1-xml \
        php7.1-json \
        php7.1-curl \
        php7.1-gd \
        php7.1-mysql \
        php-pear \
    && apt-get remove -y --purge software-properties-common \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# enable apache2 modules
RUN a2enmod rewrite
RUN a2enmod expires
RUN a2enmod headers

# Add conf apache2
COPY apache2/sites-available/lamp.conf /etc/apache2/sites-available/lamp.conf
RUN a2dissite 000-default
RUN a2dissite default-ssl
RUN a2ensite lamp

# Add conf php
COPY php/conf.d/custom_php.ini /etc/php/7.1/mods-available/custom_php.ini
RUN ln -s /etc/php/7.1/mods-available/custom_php.ini /etc/php/7.1/cli/conf.d/custom_php.ini
RUN ln -s /etc/php/7.1/mods-available/custom_php.ini /etc/php/7.1/apache2/conf.d/custom_php.ini

# User 1000 is www-data
RUN usermod -u 1000 www-data

WORKDIR /var/www/html

EXPOSE 80
CMD ["/usr/sbin/apache2ctl","-DFOREGROUND"]
