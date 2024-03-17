## requirements
composer 2
symfony cli
mysql server 
php 8.2.0
Node.js

## install dependencies
composer install

## Database
## Connect the DB via .env file
Change the DATABASE_URL MySQL line with the below code.
DATABASE_URL="mysql://user:password@host:port/DB_name?serverVersion=5.7.39&charset=utf8mb4"
Add your passwork and port

## Create the DB
php bin/console doctrine:database:create
## Populate DB using fixtures
This website is delivered with fixture to automatically populate your DB with fake data's.
Launch the fixtures using the following command: ./bin/console doctrine:fixture:load

## Server backend
## install certificate TLS
symfony server:ca:install
## start PHP server without TLS 
Next.js doesn't support HTTPS requests in .dev mode. As a consequence, server must be started without TLS using command: symfony server:start --no-tls --port=8000
## Start next.js server
Next.JS server can be started using the command: npm run dev

## Access website
Please use localhost port:3000

## API
https://localhost:8000/api

## JWT
The website uses JWT for authentication.
JWT can be read using this website: https://jwt.io/