<?php

use App\Http\Controllers\Controller;
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
Route::get('loginOk',function (){
    return view('auth.login');
});
Route::post('login','Auth\LoginController@store');


Route::get('showQuestion','questionTableController@index');
Route::post('submit','questionTableController@store');
Route::get('quizInfo2',function (){
    return view('Teacher.addExam');
});
Route::get('examDimu',function (){
    return view('students.searchExam');
});

Route::post('search_exam','questionTableController@showQuestion');
Route::post('submitAnswer/{question_id}','questionTableController@update');
Route::post('submitExam/{exam_id}','quizTableController@check');
Route::post('quizInfo','quizTableController@check');
/*Route::post('add_exam',function (){
    return view('intermediate.check')->withNumber('examNumber',$examNumber);
});*/
