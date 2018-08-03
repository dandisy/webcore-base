## Webcore Main Package

For https://github.com/dandisy/webcore

### Installation

    composer require dandisy/webcore-base:dev-master

### Publishing

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=config

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=Controllers

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=views

    php artisan vendor:publish --provider="Webcore\Base\BaseServiceProvider" --tag=assets

    php artisan vendor:publish --tag="laratrust"

### Setting Dependencies

    php artisan laratrust:setup


#
by dandi@redbuzz.co.id