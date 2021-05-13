FROM php:7.4.18-fpm

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

RUN echo "extension=/usr/local/lib/php/extensions/no-debug-non-zts-20200930/mysqli.so >>  /usr/local/etc/php/php.ini"