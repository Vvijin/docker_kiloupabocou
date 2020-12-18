FROM php:7.3.3-apache 
RUN apt-get update 
RUN apt-get upgrade -y 
RUN docker-php-ext-install mysqli 
RUN apt-get install nginx
EXPOSE 80