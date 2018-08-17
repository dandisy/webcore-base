## Webcore Main Package

For https://github.com/dandisy/webcore

### Installation

add in composer.json 
    
    "minimum-stability": "dev",

then

    composer require dandisy/webcore-base:dev-master

### Publishing

    php artisan vendor:publish --tag=webcore

    php artisan vendor:publish --tag=webcore-override --force

### Setting Dependencies

    php artisan laratrust:setup

    php artisan laratrust:seeder

    php artisan vendor:publish --tag="laratrust"


#
by dandi@redbuzz.co.id