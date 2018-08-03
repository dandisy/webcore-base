## Webcore Main Package

For https://github.com/dandisy/webcore

### Installation

    composer require dandisy/webcore-base:dev-master

### Publishing

    php artisan vendor:publish --tag=webcore

    php artisan vendor:publish --tag=webcore-seeds --force

    php artisan vendor:publish --tag=webcore-user --force

    php artisan vendor:publish --tag=webcore-route --force

### Setting Dependencies

    php artisan laratrust:setup

    php artisan laratrust:seeder

    php artisan vendor:publish --tag="laratrust"


#
by dandi@redbuzz.co.id