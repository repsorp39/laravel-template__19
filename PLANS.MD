# To run my app

1. npm run dev
2. php artisan serve


# Steps by steps personal setup

1. Install bootstrap and configure
- composer require laravel/ui
- php artisan ui bootstrap
- npm install && npm run dev
- add ```@vite(['resources/css/app.css', 'resources/js/app.js'])``` to your files


2. Update databases migrations to match the exam table

3. Create seeds when required

- php artisan make:seed SeedName
- register seed 
- run it: `php artisan db:seed`





