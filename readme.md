# Kiveukoa

## **What is it?**

It's a small app made to ease dinners organization for teammates.

## **How does it work ?**

You have two profiles aiming two uses, a big part of the functionalities is already implemented and is divided as follows. 

The biggest part of relations is defined between the four main elements ( two others elements are going to be implemented later as Serving and Meal), following those affirmations :

* A food type can have multiple restaurants.
* A restaurant can have only one food type.
* A restaurant can have multiple menus.
* A menu can belong to one restaurant only.
* A menu can have multiple dishes.
* A dish can belong to one menu only.

About the missing elements :

* A user can create multiple servings.
* A serving can have one restaurant with one menu only.
* A user can join one serving only per lunch.
* A user can have one meal per serving only.
* A meal belongs to a unique user.

***User***

* Food type overview
* Restaurant overview (organized by food type or restaurant view only with attached menus and dishes)
* Serving and meal handling to be implemented

***Administrator***

* Full CRUD (Food type / Restaurant / Menu / Dish)

## **How to make it work ?**

You need a few things :
* A Php server
* Node w/ Npm
* A database

## **Install**

Configure your .env file (an example is provided).
The part that we need is the database :


Copy the repository first.\
`git clone https://github.com/rafik-z/Kiveukoa.git`

Get in \
`cd Kiveukoa`

Install package.json dependencies\
`npm install`

Compile assets\
`npm run dev`

Create your .env file and configure the DB part :

DB_CONNECTION=pgsql\
DB_HOST=127.0.0.1\
DB_PORT=5432\
DB_DATABASE= INSERT_NAME_HERE\
DB_USERNAME= HERE_TOO\
DB_PASSWORD=

Create the db tables\
`php artisan migrate`

Populate the database with dummy informations\
`php artisan db:seed`

Run the app\
`php artisan serve`

Use the following credentials to test out the app.

***Administrator profile :***
* login : admin@rafikzebdi.net 
* password : admin

***User profile :***
* login : bruce@wayne-entreprise.com
* password : richasfuck
