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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout', function(){
    Auth::logout(); 
    return Redirect::to('/');
});


route::get('/productos', function() {

	return view('productos');

});

route::post('/vuelta','ArticulosController@vuelta');
route::get('/vuelta','ArticulosController@vuelta');

route::get('/productos','ArticulosController@consultarProductos');

Route::get('/mostrarArticulo', 'ArticulosController@mostrarArticulo'); 


Route::get('admin', 'AdminController@admin');
	Route::group(['prefix' => 'admin'], function () {   
	});


Route::get('/registrarUsuarios', 'AdminController@registrarUsuarios');
Route::post('/guardarUsuario', 'AdminController@guardarUsuario');
Route::get('/consultarUsuarios', 'AdminController@consultarUsuarios');
Route::get('/eliminarUsuario/{id}', 'AdminController@eliminarUsuario');	
Route::get('editarUsuarios/{id}', 'AdminController@editarUsuarios');
Route::post('actualizarUsuario/{id}', 'AdminController@actualizarUsuario');

Route::get('/registroArticulo', 'AdminController@registroArticulo');
Route::post('/guardarArticulo', 'AdminController@guardarArticulo'); 
Route::get('/consultarArticulo', 'AdminController@consultarArticulo'); 
Route::get('/eliminarArticulo/{id}', 'AdminController@eliminar');
route::get('/productos','AdminController@consultarProductos');
Route::get('/actualizarArticulo/{id}', 'AdminController@actualizar');
Route::post('/actualizar/{id}', 'AdminController@actualizarArticulo');


Route::get('/articulos','ArticulosController@enviar');

Route::get('/consultar','ArticulosController@consultar');



