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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/registration', 'RegistrationController@registeruserindex')->name('registration.index');
Route::post('/registration', 'RegistrationController@registeruser');

Route::get('/adminregistration', 'RegistrationController@registeradminindex')->name('registration.adminindex');
Route::post('/adminregistration', 'RegistrationController@registeradmin');



Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/adminhome', 'HomeController@adminindex')->name('adminhome.index');
Route::get('/adduser', 'HomeController@adduser')->name('adminhome.adduser');
Route::post('/adduser', 'HomeController@storeuser');

Route::get('/userlist', 'HomeController@userlist')->name('adminhome.userlist');

Route::get('/edituser/{id}', 'HomeController@edit')->name('adminhome.edituser');
Route::post('/edituser/{id}', 'HomeController@update');
Route::get('/deleteuser/{id}', 'HomeController@deleteuser')->name('adminhome.deleteuser');


Route::get('/addproduct', 'HomeController@addproduct')->name('adminhome.addproduct');
Route::post('/addproduct', 'HomeController@storeproduct');
Route::get('/productlist', 'HomeController@productlist')->name('adminhome.productlist');
Route::get('/adminhome/edit/{id}', 'HomeController@editproduct')->name('adminhome.editproduct');
Route::post('/adminhome/edit/{id}', 'HomeController@updateproduct');
Route::get('/adminhome/delete/{id}', 'HomeController@deleteproduct')->name('adminhome.deleteproduct');

Route::get('/search', 'HomeController@search1');


Route::get('/home', 'HomeController@index')->name('home.index');