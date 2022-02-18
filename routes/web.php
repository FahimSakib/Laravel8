<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Models\Phone;
use App\Models\Product;
use App\Models\User;

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

// Route::view('/hello', 'hello');

Route::resource('/hello', 'HelloController');

Route::get('contact','ProfileController@contact')->name('contact');

// Route::resource('product', 'ProductController');

Route::get('product', function(){
    $data = [
        Product::max('price'),
        Product::min('price'),
        Product::count('price'),
        Product::sum('price'),
        Product::avg('price'),
        Product::where('category_id',2)->max('price'),
        Product::where('category_id',2)->avg('price')
    ];
   return $data;
   
});

Route::get('product/where', function(){
    // return Product::Where('category_id',2)->get();
    // return Product::Where('price','>=',100)->get();
    return Product::Where(['category_id' => 1, 'brand_id'=>1])->get();
});

Route::get('product/or-where', function(){
    return Product::Where('category_id',2)->OrWhere('brand_id',1)->get();
});

Route::get('product/where-between', function(){
    return Product::whereBetween('id',[1,4])->get();
});

Route::get('product/where-not-between', function(){
    return Product::whereNotBetween('id',[1,10])->get();
});

Route::get('product/where-in', function(){
    return Product::whereIn('id',[1,5,7,9])->get();
});

Route::get('product/date', function(){
    return Product::whereDate('created_at','2022-02-18')->get();
});

Route::get('product/day', function(){
    return Product::whereDay('created_at',18)->get();
});

Route::get('product/month', function(){
    return Product::whereMonth('created_at',02)->get();
});

Route::get('product/year', function(){
    return Product::whereYear('created_at',2022)->get();
});

Route::get('product/oldest', function(){
    return Product::oldest()->first();
});

Route::get('product/latest', function(){
    return Product::latest()->first();
});

Route::get('product/order-by', function(){
    return Product::orderBy('id','desc')->get();
});

Route::get('product/limit', function(){
    // return Product::offset(5)->limit(3)->orderBy('id','desc')->get();
    return Product::skip(5)->take(5)->orderBy('id','desc')->get();
});

Route::get('product/random-order', function(){
    // return Product::limit(3)->inRandomOrder()->get();
    return Product::inRandomOrder()->get()->take(3);
});

Route::get('user', function(){
    // $user = User::find(1);
    // return $user->phone->phone_number;

    $phone = Phone::find(1);
    return $phone->user;
});