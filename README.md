

# Laravel - A starter development environment 
* Docker Voyager Atomic Design and Bootstrap

(Without patience to make a happy description about back/front-end)
## BackEnd instructions
Laravel + Voyager + Mysql

## FrontEnd instructions
Blade + Atomic Desing + Bootstrap

## Install Instructions 
###  STEP 1 - You will need:

* Docker
* Docker-compose
* Composer

Previously installed on your machine

### STEP 2 - Building a docker image
* Build php image  
`docker build -t laravel-php registry-laravel/php` 


#### STEP 3 - Changing your hosts (MAC AND LINUX)
Go to **/etc/hosts** file and ADD the lines below:

127.0.0.1   app.laravel.com 
127.0.0.1   db.laravel.com
127.0.0.1   proxy.laravel.com


###  STEP 5 - Install the project dependencies
Go to `laravel` folder and `composer install` at the command line


###  STEP 6 - Starting everything!
`docker-compose up`

`!!` ATTENTION `!!` wait for everything to be up and then go to next steps

# Creating database and installing Voyager CMS:
run the command below at the project folder
`./configure.sh`

When this finishes, the Voyager database will be seeded with:
* User: admin@admin.com
* Pass: password

You can visit the admin panel accessing: `app.laravel.com/admin` on your browser
