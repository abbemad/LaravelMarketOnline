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

Route::view('/order', 'shop')->name('shop');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');



Route::get('/country/{id}',function($id){
    $countries = App\Country::all();
    return view('/country',compact('countries'));
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/order','ShopController@index');
Route::get('/order/create/{id}','ShopController@create');
Route::get('/order/edit/{id}',['as'=>'edit/order','uses'=>'ShopController@edit']);
Route::get('/order/delete/{id}','ShopController@destroy');
Route::get('/order/delete/{id}', 'ShopController@destroy');
Route::post('/order/update','ShopController@update');
Route::post('/order/save','ShopController@store');


    //prefix with group function, with this you can remove all the /admin from the the following routes
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
 
    Route::get('/users/list','UserController@index');
    Route::get('/users/insert','UserController@insert');
    Route::get('/users/delete','UserController@delete');
    Route::get('/users/edit/{id}',['as'=>'edit/users','uses'=>'UserController@edit']);

    Route::post('/users/save','UserController@save');

    Route::get('/users/delete/{id}', 'UserController@delete');

    Route::post('/users/update','UserController@update');

    Route::get('/users','UserController@index');

    Route::get('/users/member','MemberController@index');
    Route::get('/users/member/insert','MemberController@insert');
    Route::post('/users/member/save','MemberController@save');

    Route::get('/products','ProductController@index');
    Route::get('/products/create','ProductController@create');
    Route::get('/products/edit/{id}',['as'=>'edit/products','uses'=>'ProductController@edit']);
    Route::get('/products/delete','ProductController@destroy');
    Route::get('/products/delete/{id}', 'ProductController@destroy');
    Route::post('/products/update','ProductController@update');
    Route::post('/products/save','ProductController@store');

    Route::get('/tasks','TasksController@index');
    Route::get('/tasks/task/{id}','TasksController@show');
});
