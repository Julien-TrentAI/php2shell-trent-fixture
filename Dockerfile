FROM php:8.1.27-apache
COPY public/ /var/www/html/
COPY composer.json /var/www/
EXPOSE 80
