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

Route::get('/', 'Customer\CustomerController@index')->name('customer.index');

// Admin Login
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'admin-login'], function () {
   Route::get('/', 'PageController@index')->name('index');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');
});
//***************************************************//

// Admin manage users

Route::get('admin/users', 'UserController@index')->name('users.index');
Route::get('admin/users/create', 'UserController@create')->name('users.create');
Route::post('admin/users', 'UserController@store')->name('users.store');
Route::get('admin/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::put('admin/users/{id}', 'UserController@update')->name('users.update');
Route::get('admin/users/{id}', 'UserController@show')->name('users.show');
Route::delete('admin/users/{id}', 'UserController@destroy')->name('users.destroy');


//***************************************************//
// Login users

Route::group(['prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer'], function(){
	Route::get('/login', 'CustomerController@login')->name('login');
	Route::post('/login', 'CustomerController@showLoginForm')->name('loginform');
	Route::get('/logout', 'CustomerController@logout')->name('logout');
});


Auth::routes();
