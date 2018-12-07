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

Route::get('/', 'ProductosController@index')->name('home');
Route::get('/faq', 'Controller@faq')->name('faq');

Route::post('/nuevaConsulta', 'ConsultaController@store')->name('nuevaConsulta');

Auth::routes();
// Route::get('/login', 'HomeController@index')->name('login');
Route::get('/home', 'HomeController@index');


Route::get('/mi-carrito', [
    'uses'=>'ProductosController@getCarrito',
    'as'=>'miCarrito'
]);
Route::get('/agregarItem/{id}',[
    'uses'=>'ProductosController@getAgregarItem',
    'as'=>'agregarItem'
]);


Route::get('/producto/{id}', 'ProductosController@show');

Route::get('/productos', 'ProductosController@view')->name('productosShow');


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

Route::get('/adm/productos', [
    'uses' => 'Admin\ProductosController@index',
    'as' => 'viewProductos',
    'middleware' => 'roles',
    'roles' => ['admin', 'superAdmin']
]);

Route::get('/adm/productos/new', [
    'uses' => 'Admin\ProductosController@create',
    'as' => 'productos',
    'middleware' => 'roles',
    'roles' => ['admin', 'superAdmin']
]);

Route::post('/adm/productos/new', [
    'uses' => 'Admin\ProductosController@store',
    'as' => 'newProducto',
    'middleware' => 'roles',
    'roles' => ['admin', 'superAdmin']
]);

Route::get('/adm/productos/{id}', [
    'uses' => 'Admin\ProductosController@show',
    'as' => 'showProducto',
    'middleware' => 'roles',
    'roles' => ['admin', 'superAdmin']
]);

Route::put('/adm/productos/{id}', [
    'uses' => 'Admin\ProductosController@edit',
    'as' => 'editProducto',
    'middleware' => 'roles',
    'roles' => ['admin', 'superAdmin']
]);

Route::delete('/adm/productos/{id}/delete', [
    'uses' => 'Admin\ProductosController@destroy',
    'as' => 'deleteProducto',
    'middleware' => 'roles',
    'roles' => ['admin', 'superAdmin']
]);

Route::get('/storage-link', 'LinkController@storagelink');