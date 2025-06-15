FROM php:8.4.8-apache

# install lib for connecting to php database.
RUN apt-get update -y && \
    apt-get upgrade -y && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Copy the site pages from the htdocs directory. I have no idea how this copies to /var/www/html without specifying, but it does.
COPY ../htdocs .

# Switch to a non-privileged user (defined in the base image) that the app will run under.
# See https://docs.docker.com/go/dockerfile-user-best-practices/
USER www-data