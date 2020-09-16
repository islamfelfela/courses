# Mktabaty - Library management system



Courses - Simple Courses app

## Users Roles

- user
- admin

the admin has a dashboard so that he can add, remove and update courses

## Installation instructions:

##### first cd to project directory
##### Install Composer Dependencies:

```
composer install
```

##### Install NPM Dependencies

```
npm install
```

##### Create a copy of your .env file

```
cp .env.example .env
```

##### Create an empty database for our application

##### In the .env file, add database information to allow Laravel to connect to the database

##### Migrate the database

```
php artisan migrate
```
##### Run the project

```
php artisan serve
```

##### Default account:

* username: admin 
* password: admin

