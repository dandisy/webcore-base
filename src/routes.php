<?php

use Illuminate\Http\Request;
use League\Glide\ServerFactory;
use League\Glide\Responses\LaravelResponseFactory;
use Illuminate\Contracts\Filesystem\Filesystem;

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function() {
        redirect('home');
    });

    Route::get('admin', function() {
        redirect('home');
    });

    Route::get('menu-manager', function () {
        return view('menu::index');
    });

    //ERROR : class role not found, class controller not found
    // Route::group(['middleware' => ['role:superadministrator|administrator']], function () {
    //     Route::resource('users', 'UserController');

    //     Route::resource('profiles', 'ProfileController');

    //     Route::resource('roles', 'RoleController');

    //     Route::resource('permissions', 'PermissionController');

    //     Route::resource('settings', 'SettingController');
    // });
});

Route::get('/img/{path}', function(Filesystem $filesystem, $path) {
    $server = ServerFactory::create([
        'response' => new LaravelResponseFactory(app('request')),
        'source' => $filesystem->getDriver(),
        'cache' => $filesystem->getDriver(),
        'cache_path_prefix' => '.cache',
        'base_url' => 'img',
    ]);

    return $server->getImageResponse($path, request()->all());

})->where('path', '.*');
