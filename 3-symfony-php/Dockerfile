# Base image: https://github.com/docker-library/php/blob/master/8.3/bookworm/fpm/Dockerfile
ARG PHP_VERSION=8.3

FROM php:${PHP_VERSION}-fpm

# Install Nginx and system dependencies
RUN apt-get update && apt-get install -y \
    git \
    lsof \
    man \
    procps \
    nginx \
    sudo \
    supervisor \
    vim

# Copy the default nginx.conf provided by the base image just for reference
RUN cp /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig

# Copy the custom supervisord.conf to the container running Supervisor
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Install Symfony CLI
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash && \
sudo apt install symfony-cli

# Set working directory
WORKDIR /etc/nginx

CMD ["/usr/bin/supervisord"]
