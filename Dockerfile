FROM php:5.6.29-apache

# Configure php with correct timezone
RUN echo date.timezone=Asia/Tokyo > /usr/local/etc/php/php.ini

RUN mkdir -p /usr/local/bin
RUN curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
RUN chmod a+x /usr/local/bin/symfony

# RUN a2enmod rewrite

COPY ./app /var/www/html/
COPY ./apache/site-config.conf /etc/apache2/sites-available/000-default.conf
