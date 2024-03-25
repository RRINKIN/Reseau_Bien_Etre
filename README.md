Thank you for testing this website.
This is a project called "reseau bien etre" made for the ISL.BE institute.
Please find bellow, the information to deploy the website locally.

## requirements
composer 2
symfony cli
mysql server 5.7
php 8.2.0
Node.js v20.10.0

## Architecture
This sites has a backend in PHP using the symfony framework.
It also has a frontend in REACT based on NEXT.JS framework.

## install dependencies
### Backend
Open a new terminal in the backend repository
Run the following command :
composer install

### Database
#### Connect the DB via .env file du backend
Change the DATABASE_URL MySQL line with the below code.
DATABASE_URL="mysql://user:password@host:port/DB_name?serverVersion=5.7.39&charset=utf8mb4"
Add your user, password,version and port

#### Create the DB
In your terminal, enter: 
php bin/console doctrine:database:create
#### Populate DB using fixtures
This website is delivered with fixture to automatically populate your DB with fake data's.
Launch the fixtures using the following command: ./bin/console doctrine:fixture:load

### Frontend
Open a new terminal in your frontend repository
Run the following command:
npm install

## start PHP server without TLS 
Next.js doesn't support HTTPS requests in .dev mode. 
As a consequence, server must be started without TLS. 
Open the terminal of your frontend and run the below command:
symfony server:start --no-tls --port=8000

## Configuration mailtrap (envois de mail) via .env file du backend
Mailtrap is used to capture mails sent and received.
Create an account on mailtap and configure the key MAILER_DSN in the .env file of your backend
exemple:
MAILER_DSN=smtp://b47706ce69b1f7:04ee624bf7b972@sandbox.smtp.mailtrap.io:2525
ATTENTION: port 8000 and 3000 must be free

## Start next.js server
Next.JS server can be started using the command: npm run dev

## Access website
If both servers are running, you can access the website via localhost port:3000 : http://localhost:3000

## API
This website uses APIPlatform.
API documentatio and API can be accessed here: 
http://localhost:8000/api

## JWT
The website uses JWT for authentication.
JWT can be read using this website: https://jwt.io/

## SVG and Icons
SVG and Icons all come from <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->