## Webcore Main Package

For https://github.com/dandisy/webcore

### Installation

add this additional composer config in composer.json file of your laravel project (composer.json file in your root laravel project)
    
    "minimum-stability": "dev",

for example we add it under "type" :

    {
        . . .
        "type": "project",
        "minimum-stability": "dev",
        "require": {
            . . .
        },
        . . .
    }

install webcore-base via composer

    composer require dandisy/webcore-base:dev-master

### Publishing Webcore Package to Your Laravel Project

    php artisan vendor:publish --tag=webcore

    php artisan vendor:publish --tag=webcore-override --force

### Installing and Activating Laratrust

    php artisan laratrust:setup

    php artisan laratrust:seeder

    php artisan vendor:publish --tag="laratrust"

### Dumping

    composer dump-autoload

### Migrating & Seeding

    php artisan migrate --seed

if you get error SQLSTATE[42000], add this in boot() function in app/Providers/AppServiceProvider.php

    \Illuminate\Support\Facades\Schema::defaultStringLength(191);

    then run again

    php artisan migrate --seed


#
by dandi@redbuzz.co.id