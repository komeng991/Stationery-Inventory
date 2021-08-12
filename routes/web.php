<?php

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
Auth::routes();

Route::get('/', [
                    'uses'          => 'HomeController@index',
                    'middleware'    => 'CheckVerified'
                   ] )->name('home');

Route::get('/home',[
                    'uses'          => 'HomeController@index',
                    'middleware'    => 'CheckVerified'
                   ]  )->name('home');

Route::resource('users', 'UsersController');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
Route::resource('register', 'Auth\RegisterController');

Route::post('/login', [
    'uses'          => 'Auth\LoginController@login',
    'middleware'    => 'CheckVerified',
]);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('product/request', 'ProductsController@request')->name('product.request');
Route::resource('product', 'ProductController');


Route::resource('request', 'RequestController');

Route::resource('home', 'HomeController');