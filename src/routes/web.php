<?php

//use App\Models\MenuItem;
use Illuminate\Http\Request;
use League\Glide\ServerFactory;
use League\Glide\Responses\LaravelResponseFactory;
use Illuminate\Contracts\Filesystem\Filesystem;
use App\Repositories\ProfileRepository;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', function () {
    // if(Laratrust::hasRole(['administrator','superadministrator'])) {
        return redirect('dashboard');
    // } else {
    //     return redirect('home');
    // }
});

Route::get('edit-profile', function(ProfileRepository $profileRepository) {
    return view('profiles.edit')->with('profile', $profileRepository->findWhere(['user_id' => Auth::user()->id])->first());
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function() {
        return view('dashboard');
    });

    Route::get('analytics', 'HomeController@index');

    Route::group(['middleware' => ['role:superadministrator']], function () {
        // Route::resource('users', 'UserController');

        // Route::resource('profiles', 'ProfileController');

        Route::resource('roles', 'RoleController');

        Route::resource('permissions', 'PermissionController');
    });

    Route::group(['middleware' => ['role:superadministrator|administrator']], function () {
        Route::resource('settings', 'SettingController');
    });
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