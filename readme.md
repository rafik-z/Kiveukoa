# Kiveukoa

##**What is it?**

It's a small app made to ease dinners organization for teammates.

##**How to make it work ?**

You need a few things :
* A Php server
* Node w/ Npm
* A database

##**Install**

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

Create your .env file and configure the DB part :\

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
