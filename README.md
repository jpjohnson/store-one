# Project Store-One
Store-One is based on Laravel.
The store utilizes a database with tables:
- Users
- Products
- Inventory
- Orders

Used Laravel's Docker development environment, [Sail](https://laravel.com/docs/8.x/sail) 
The initial install and setup may take some time to build the container and seed the database.

## Authentication 
The login authenticates using email and password against the users table.

## Pages
### Dashboard
Show a count of the the user's products and inventory. 
You can navigate to those pages with the header links.
### Products
List of user's products
### Inventory
List of user's product inventory. This can be filtered by; Product Name, Product id, or Inventory SKU. *Filtering uses 'like'*

## Running
This app runs in a docker container using Sail (see [link](https://laravel.com/docs/8.x/sail#installation) about installing).

Command to start up, -d will start in detached mode.
> ./vendor/bin/sail up -d

## Stopping 
To stop you can use Control + C  or
> ./vendor/bin/sail down

## Seeding
The seeding data is provided in csv files : database/seeders/csvs
To seed the app run this: 
> ./vendor/bin/sail artisan db:seed 

*It may take some time to seed the database*

