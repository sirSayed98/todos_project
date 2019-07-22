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

Route::get('todos','TodosController@index');

Route::get('todos/{todo}','TodosController@show');

Route::post('store-todos', 'TodosController@store');

Route::get('new-todos', 'TodosController@create');

Route::get('todos/edit/{todo}', 'TodosController@edit');

Route::post('edit-todos/{id}', 'TodosController@Update');

Route::get('todos/delete/{todo}', 'TodosController@delete');
