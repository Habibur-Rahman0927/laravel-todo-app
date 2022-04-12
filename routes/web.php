<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/todos', 'App\Http\Controllers\TodosController@index');
Route::get('/todos/{todo}', 'App\Http\Controllers\TodosController@show');
Route::get('/create-todo', 'App\Http\Controllers\TodosController@create');
Route::post('/store-todo', 'App\Http\Controllers\TodosController@store');