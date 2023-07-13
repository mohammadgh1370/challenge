FROM php:8.2-apache
MAINTAINER Abel Moreno <abel.moreno.acevedo@gmail.com>

RUN apt-get update -y \
    && apt-get install git libzip-dev zip -y \
    && docker-php-ext-install zip

RUN echo 'max_execution_time = 120' >> /usr/local/etc/php/conf.d/docker-php-maxexectime.ini;

RUN curl -fsSL https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer global require phpunit/phpunit ^10.2 --no-progress --no-scripts --no-interaction

ENV PATH /root/.composer/vendor/bin:$PATH

EXPOSE 80
