FROM php:8.1-cli

RUN pecl install swoole \

    && docker-php-ext-enable swoole

COPY index.php /var/www

ENTRYPOINT [ "php", "/var/www/index.php", "start" ]

