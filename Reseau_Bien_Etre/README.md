## requirements
composer 2
symfony cli
mysql server 
php 8.2.0

## install dependencies
composer install

## About DB
## DB connection via .env file
DATABASE_URL="mysql://user:password@host:port/DB_name?serverVersion=5.7.39&charset=utf8mb4"
## Create DB
php bin/console doctrine:database:create
## Populate DB using fixtures
./bin/console doctrine:fixture:load

## Server backend
## install certificate TLS
symfony server:ca:install
## start server without TLS
Next.js doesn't support HTTPS requests in .dev mode. As a consequence, server must be started without TLS using command: symfony server:start --no-tls

## API
https://localhost:8000/api