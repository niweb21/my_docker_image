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

RUN a2enmod rewrite
RUN a2enmod expires
RUN a2enmod headers

EXPOSE 80
CMD ["/usr/sbin/apache2ctl","-DFOREGROUND"]
