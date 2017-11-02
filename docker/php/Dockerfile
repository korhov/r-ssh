FROM php:5.6.32-fpm

COPY php.ini /usr/local/etc/php/php.ini
COPY php.ini /usr/local/etc/php.ini

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip unzip ssh && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /home/rubetek/source
