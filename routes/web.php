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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/question',function (){
    return view('questions.question');
});
Route::get('registerOk',function (){
   return view('auth.register');
});
Route::post('register','Auth\RegisterController@store');
Route::get('showQuestion','questionTableController@index');
Route::post('submit','questionTableController@store');
