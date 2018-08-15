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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/test', function () {
    return view('test');
});*/

Route::get('/', function () {
    return view('log');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/listP', function () {
    return view('listPage');
});

Route::get('/detail', function () {
    return view('detail');
});



Route::get('/user',['uses'=>'UserController@test1']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//登陸
Route::get('/logC', 'LogController@verify');



Route::get('/detail', 'IndentController@detail');

