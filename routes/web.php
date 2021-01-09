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
    return view('admin.template.main');

});

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function(){
 
	Route::resource('Users','UsersController');
	Route::resource('roles','RoleController');
	Route::resource('Clients','ClientController');
});

Auth::routes();

Route::get('/home', 'Controller@index')->name('index');
Route::get('/Salir', '\App\Http\Controllers\Auth\LoginController@logout');