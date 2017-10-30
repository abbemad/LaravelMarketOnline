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
Route::view('/', 'welcome')->name('home');

Route::view('/shop', 'shop')->name('shop');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
    //prefix with group function, with this you can remove all the /admin from the the following routes
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    
    Route::get('/users/list','UserController@index');
    Route::get('/users/insert','UserController@insert');
    //Route::get('/users/edit','UserController@edit');
    Route::get('/users/delete','UserController@delete');
    Route::get('/users/edit/{id}',['as'=>'edit/users','uses'=>'UserController@edit']);

    Route::post('/users/save','UserController@save');

    Route::post('/users/delete', 'UserController@delete');

    Route::post('/users/update','UserController@update');


    Route::get('/users','UserController@index');
});
