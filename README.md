### aut-reg-php-mysql-twig-slim

# PHP Регистрация и Авторизация с сессией. Полноценное приложение на PHP и MySQL, Twig, Slim
## Первоисточник, последовательность, инструкция 
## https://www.youtube.com/watch?v=8R8BvBbQFnk
## Я сделал используя Docker, docker-compose.yml
#### 1. Создаем в корневом каталоге файлы `Dockerfile, docker-compose.yml`.
#### 2. Собираем, запускаем контейнеры `docker compose up --build -d`
#### 3. Создаем `composer.json` командой `composer init`.
#### 4. Заполняем `composer.json` по видео командами или по примеру.
#### 5. Создаем базу данных и таблицу.
#### --- Материал для инструкции ниже ---


Файл Dockerfile
```Dockerfile
# Dockerfile 
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
```

Файл docker-compose.yml
```yml
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
      MYSQL_DATABASE: login_register
      MYSQL_USER: root
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
```
Файл composer.json
```json
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
```

### команды для работы с контейнерами
```yml
  собрать запустить в фоновом режиме, только при сборке или после
  изменений файлов конфигурации 
docker compose up --build -d

ОСНОВНЫЕ
  запустить
docker compose up -d
  остановить
docker compose down
  посмотреть запущенные
docker compose ps

  зайти в контейнер
docker exec -it <название контейнера> bash
```

### вход на сайт авторизации и аутентификации http://localhost:8000/
### Управление базами данных phpmyadmin http://localhost:8081/
#### лошин `root`
#### пароль `secret`

### Создаем базу данных login_register 
```sql
CREATE DATABASE IF NOT EXISTS `login_register` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `login_register`;
```
### Создаем таблицу с полями 
```sql
CREATE TABLE `user` (
  `user_id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```