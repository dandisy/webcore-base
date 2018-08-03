## Webcore Main Package

For https://github.com/dandisy/webcore

### Installation

    composer require dandisy/webcore-base:dev-master

    php artisan laratrust:setup

    composer dump-autoload

### More

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=config

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=assets

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=controller

    php artisan vendor:publish --tag="laratrust"

if you want to override layouts view :

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=views


#
by dandi@redbuzz.co.id