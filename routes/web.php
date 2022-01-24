<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('home','home');

// Route::redirect('/', 'home');

Route::prefix('')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //new laravel 8 routing system

// Route::get('/home', [HomeController::class, 'index'])->name('home'); //new laravel 8 routing system

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home'); //new laravel 8 routing system

Route::get('/home', 'HomeController@index')->name('home'); //previous laravel routing system

// Route::get('/welcome', 'WelcomeController@index');

// Route::get('/welcome/delete', 'WelcomeController@delete');

// Route::get('/welcome/show/{id}', 'WelcomeController@show');

// Route::resource('welcome', 'WelcomeController');

// Route::resource('profile', 'ProfileController')->except('index');

Route::get('post', 'PostController');

Route::resources([
    'profile' => 'ProfileController',
    'welcome' => 'WelcomeController'
]);
