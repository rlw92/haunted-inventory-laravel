# haunted-inventory-laravel


Deployed application:
https://haunted-inventory-laravel.onrender.com

Goals:

Update:

The site I am using to deploy does not have persistent disk storage. Therefore the project will be altered to a two sentence horror version of the idea, showing the star rating and the comments.

- - - -  - - 

A Multi Page Crud application that allows users to post photographs of haunted objects and a short story to go with it.
An excercise in creative writing and a project that will allow me to develop my laravel skills.

Learning Goals:
Email Verification - done,
Moderation of stories before posting,
Administrative priveliges,
Star Rating system,
Comments under stories,

How to set up laravel project:

git clone the project,
move into the project directory with 'cd',
composer install,
npm install,
cp .env.example .env,
set up the .env file,
php artisan key:generate,
open up a terminal in vscode,
in that terminal: php artisan key:generate,
to create the tables and seed: php artisan migrate:fresh --seed,
to connect image uploading to local disk: php artisan storage:link   
php artisan serve,

reference: https://rohitgulam.hashnode.dev/how-to-set-up-a-laravel-project-after-cloning-from-github