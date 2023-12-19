## requirements
composer 2
symfony cli
mysql server 
php 8.2.0

## install certificate TLS
symfony server:ca:install

## install dependencies
composer install

## DB connection via .env file
DATABASE_URL="mysql://user:password@host:port/DB_name?serverVersion=5.7.39&charset=utf8mb4"

## Populate DB using fixtures
./bin/console doctrine:fixture:load