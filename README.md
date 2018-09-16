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

    php artisan vendor:publish --tag=webcore --force

### Setup Laratrust

    php artisan laratrust:setup

### Dumping

    composer dump-autoload

### Migrating & Seeding

    php artisan migrate --seed

#### Note :
if you get error SQLSTATE[42000], add this in boot() function in app/Providers/AppServiceProvider.php

    \Illuminate\Support\Facades\Schema::defaultStringLength(191);

so AppServerProvider become :

    <?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        /**
        * Bootstrap any application services.
        *
        * @return void
        */
        public function boot()
        {
            \Illuminate\Support\Facades\Schema::defaultStringLength(191);
        }

        /**
        * Register any application services.
        *
        * @return void
        */
        public function register()
        {
            //
        }
    }

then run again

    php artisan migrate:fresh --seed

### Usage

After long steps in above, now we can use Webcore Platform.

For example we can generate admin page for manage (CRUD) of our pages, run this artisan command :

    php artisan generate:api_scaffold Page --fieldsFile=Page.json --datatables=true --prefix=admin --logs

#### More documentation

For more usage documentation you can find in https://github.com/dandisy/webcore


#
by dandi@redbuzz.co.id