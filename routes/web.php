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
Route::get('/result', 'Controller@result');
Route::get('/admin', 'Controller@admin');

//Route::post('/result', function () {
//    return view('main');
//});

Route::get('/Alpheratz', 'Controller@Alpheratz');
Route::get('/Control', 'Controller@Controls');
Route::get('/CheckControl', 'Controller@checkControl');

Route::get('/Check', 'Controller@Check');

Route::get('/course', 'IntroController@index');
Route::get('/main', function () {
    return view('main');
});
Route::post('/course', 'TaskController@index');

//Route::post('/course', function () {
//    return Input::post('t');
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
