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

Route::get('/adminhome', 'AdminController@adminindex')->name('adminhome.index');
Route::get('/adduser', 'AdminController@adduser')->name('adminhome.adduser');
Route::post('/adduser', 'AdminController@storeuser');

Route::get('/userlist', 'AdminController@userlist')->name('adminhome.userlist');

Route::get('/edituser/{id}', 'AdminController@edit')->name('adminhome.edituser');
Route::post('/edituser/{id}', 'AdminController@update');
Route::get('/deleteuser/{id}', 'AdminController@deleteuser')->name('adminhome.deleteuser');


Route::get('/addproduct', 'AdminController@addproduct')->name('adminhome.addproduct');
Route::post('/addproduct', 'AdminController@storeproduct');
Route::get('/productlist', 'AdminController@productlist')->name('adminhome.productlist');
Route::get('/adminhome/edit/{id}', 'AdminController@editproduct')->name('adminhome.editproduct');
Route::post('/adminhome/edit/{id}', 'AdminController@updateproduct');
Route::get('/adminhome/delete/{id}', 'AdminController@deleteproduct')->name('adminhome.deleteproduct');


Route::get('/home', 'UserController@index')->name('userhome.index');
Route::get('/ram', 'UserController@ramindex')->name('userhome.ram');
Route::get('/storage', 'UserController@storageindex')->name('userhome.storage');
Route::get('/casing', 'UserController@casingindex')->name('userhome.casing');
Route::get('/processor', 'UserController@processorindex')->name('userhome.processor');
Route::get('/graphicscard', 'UserController@gcardindex')->name('userhome.gcard');
