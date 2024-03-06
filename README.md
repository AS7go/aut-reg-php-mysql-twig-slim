<pre>

# aut-reg-php-mysql-twig-slim
aut-reg-php-mysql-twig-slim

PHP Регистрация и Авторизация с сессией. Полноценное приложение на PHP и MySQL, Twig, Slim
https://www.youtube.com/watch?v=8R8BvBbQFnk

--- Dockerfile ---

# Use an official PHP runtime
FROM php:8.2-apache

# Enable Apache modules
RUN a2enmod rewrite

# Install any extensions you need
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the source code in /www into the container at /var/www/html
# COPY ../www .
COPY . .


--- docker-compose.yml ---

version: '3.9'
services:
  webserver:
    container_name: PHP-1
    build: 
      context: .
      dockerfile: Dockerfile
    volumes:
      - .:/var/www/html
    ports:
      - 8000:80
    depends_on:
      - mysql-db

  mysql-db:
    container_name: mysql-1
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: secret
      MYSQL_DATABASE: ale
      MYSQL_USER: ale
      MYSQL_PASSWORD: secret
    volumes:
      - ./mysql-data:/var/lib/mysql
    ports:
      - "3306:3306"

  phpmyadmin:
    container_name: phpmyadmin-1
    image: phpmyadmin/phpmyadmin
    depends_on:
      - mysql-db
    ports:
      - "8081:80"
    environment:
      PMA_HOST: mysql-db
      MYSQL_ROOT_PASSWORD: secret

--- composer.json ---

{
    "name": "aleksandr/aut-reg-php-mysql-twig-slim",
    "description": "Login and register with PHP and MySQL",
    "type": "project",
    "minimum-stability": "stable",
    "require": {
        "twig/twig": "^3.8",
        "slim/slim": "^4.12",
        "slim/psr7": "^1.6",
        "ext-pdo": "*"
    },
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
</pre>