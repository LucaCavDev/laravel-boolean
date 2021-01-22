<?php

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

Route::get('/helloAll', function () {
  return view('helloAll');
});

Route::get('/helloYou', function () {

  return view('helloYou', [
    'name' => 'Gordon Ramsay'
  ]);
});

Route::get('/helloYou2', function () {

  return view('helloYou', [
    'name' => 'Mr Bean'
  ]);
});


Route::get('/holaTodo', 'MainController@espanol');
Route::get('/holaTu', 'MainController@espanolTu');
Route::get('/holaTu2', 'MainController@espanolTu2');
