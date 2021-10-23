FROM php:7.4-apache
RUN apt-get update && apt-get install -y libpq-dev libonig-dev libicu-dev git unzip postgresql-client 
RUN docker-php-ext-install mbstring intl pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && ln -s $(composer config --global home) /root/composer
ENV PATH=$PATH:/root/composer/vendor/bin COMPOSER_ALLOW_SUPERUSER=1

# Apache config
RUN a2enmod rewrite
RUN a2enmod ssl

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

EXPOSE 80
EXPOSE 443
