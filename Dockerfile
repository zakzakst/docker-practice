# PHP + Apache イメージをベース
FROM php:8.2-apache

# MySQL PDO ドライバをインストール
RUN docker-php-ext-install pdo pdo_mysql