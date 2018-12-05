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

Route::get('/', 'ProductosController@index');
Route::get('/faq', 'Controller@faq')->name('faq');

Route::post('/nuevaConsulta', 'ConsultaController@store')->name('nuevaConsulta');

Auth::routes();
// Route::get('/login', 'HomeController@index')->name('login');
Route::get('/home', 'HomeController@index')->name('home');





// ADMIN VIEWS
Route::get('/adm', [
    'uses'=>'Auth\AdminLoginController@index',
    'as'=>'adminLogin'
    ]);

Route::get('/adm/consultas' , [
    'uses'=>'Admin\ConsultasController@index',
    'as'=>'consultas',
    'middleware'=>'roles',
    'roles'=>['admin', 'superAdmin']
    ]);

Route::get('/adm/usuarios', [
    'uses'=>'Admin\UsersController@index',
    'as'=>'usuarios',
    'middleware'=>'roles',
    'roles'=>['admin', 'superAdmin']
    ]);

Route::get('/adm/usuarios/{id}', [
    'uses'=>'Admin\UsersController@showUser',
    'as'=>'showUser',
    'middleware'=>'roles',
    'roles'=>['admin', 'superAdmin']
    ]);



Route::get('/adm/productos/new', 'Admin\ProductosController@create')->name('productos');
Route::get('/adm/productos', 'Admin\ProductosController@index')->name('viewProductos');
Route::post('/adm/productos/new', 'Admin\ProductosController@store')->name('newProducto');
Route::get('/adm/productos/{id}', 'Admin\ProductosController@show')->name('editProducto');
Route::put('/adm/productos/{id}', 'Admin\ProductosController@edit')->name('editProducto');
Route::delete('/adm/productos/{id}/delete', 'Admin\ProductosController@destroy');

