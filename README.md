## Title- THE SUPERCARS

## Description
This project ,Titled "SUPERCARS",is a comprehensive platform for supercar enthusiatists.It provides user with the 
opportunities to read and post articles abouts various supercars.The plateform is designed to be one-stop-shop for all supercar related informations,making it valuable resource for those interested in learning about new and exsiting
cars.Users can contribute to the plateform by adding their posts and articles. 


## Author: Keshav Verma 

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:Keshav-2601/serversidenew.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=d00253307blog1
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
1.Fork the Repository.
2.Create a new branch for your changes.
3. Make changes in your branch.
4.Submit a pull request.

This Read.ME fle provide the clear details of projects for anyone who wants to contribute.