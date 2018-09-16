## Webcore Main Package

For https://github.com/dandisy/webcore

### Installation

Add the following additional configuration to composer.json file of your project laravel (the composer.json file in the root project laravel).
    
    "minimum-stability": "dev",

for example we can add it under "type" configuration :

    {
        . . .
        "type": "project",
        "minimum-stability": "dev",
        "require": {
            . . .
        },
        . . .
    }

#### note :
Just now this step is needed only because for now the webcore-base does not have a release version, 
later this will be discarded, after the release version has been published.

Well, to install the webcore on the existing Laravel Project is as follows :

    composer require dandisy/webcore-base:dev-master

### Publishing

This step will copy the webcore codes that you can customize into the laravel project.

    php artisan vendor:publish --tag=webcore --force

### Setup Laratrust

Webcore use laratrust as Role Based Access Control (RBAC), run the following artisan command to setting up it's package :

    php artisan laratrust:setup

### Dumping

Dump the composer packages

    composer dump-autoload

### Migrating & Seeding

Do the migration and seed

    php artisan migrate --seed

#### Note :
if in this step you get an error SQLSTATE[42000], add the following to the boot() function in app/Providers/AppServiceProvider.php

    \Illuminate\Support\Facades\Schema::defaultStringLength(191);

so, that way your AppServerProvider becomes :

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

then, after editing the AppServerProvider, run again the following :

    php artisan migrate:fresh --seed

### Linking Storage

Webcore includes file manager, to handle files that you upload. As well as laravel by default, 
these uploaded files will be stored in the storage folder, to be able to access these files, 
following Laravel's explanation we need to create a symbolic link in the public folder, as follows :

    php artisan storage:link

### Usage

After being confused to follow the step by step above, now webcore has been integrated with your laravel project.

To try it you can start generating admin page for manage (CRUD) of our pages, by running the following artisan command :

    php artisan generate:api_scaffold Page --fieldsFile=Page.json --datatables=true --prefix=admin --logs

#### More documentation

Webcore contains a lot of very useful packages, 
ie : image manipulation (Glide), code generator (inspired by Infyom), file manager, and many others.

For more usage documentation you can find it on https://github.com/dandisy/webcore


#
by dandi@redbuzz.co.id