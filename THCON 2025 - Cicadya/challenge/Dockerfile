FROM php:8.2-apache

# PHP
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y zlib1g-dev libwebp-dev libpng-dev && docker-php-ext-install gd
RUN apt-get install libzip-dev -y && docker-php-ext-install zip

# Web Server files
ADD theme/ /var/www/html/
RUN chown www-data:www-data /var/www/html/images/uploads/ && chown www-data:www-data /var/www/html/data.json
RUN chmod 777 /var/www/html/images/uploads/.htaccess && chmod 777 /var/www/html/data.json && chmod 777 /var/www/html/images/uploads/

COPY flag.txt /
RUN rand_name=$(head /dev/urandom | tr -dc A-Za-z0-9 | head -c 15) && mv /flag.txt /flag-$rand_name.txt

# Apache
RUN a2enmod rewrite
RUN service apache2 restart

# Cron job
RUN apt-get install -y cron
COPY cleanup.sh /usr/local/bin/cleanup.sh
RUN chmod +x /usr/local/bin/cleanup.sh
RUN echo "*/20 * * * * www-data /usr/local/bin/cleanup.sh" >> /etc/crontab

CMD service cron start && apache2-foreground

EXPOSE 80
