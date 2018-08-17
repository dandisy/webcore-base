## Webcore Main Package

For https://github.com/dandisy/webcore

### Installation

run

    php artisan make:auth

add this in composer.json 
    
    "minimum-stability": "dev",

install webcore-base

    composer require dandisy/webcore-base:dev-master

add this in app config

    Prettus\Repository\Providers\RepositoryServiceProvider::class,
    Webcore\FileManager\FileManagerServiceProvider::class,

### Publishing

    php artisan vendor:publish --tag=webcore

    php artisan vendor:publish --tag=webcore-override --force

### Setting Dependencies

    php artisan laratrust:setup

    php artisan laratrust:seeder

    php artisan vendor:publish --tag="laratrust"

### Dumping

    composer dump-autoload

### Migrating & Seeding

    php artisan migrate --seed

if error SQLSTATE[42000] add this to boot() function in AppServiceProvider

    \Illuminate\Support\Facades\Schema::defaultStringLength(191);


#
by dandi@redbuzz.co.id