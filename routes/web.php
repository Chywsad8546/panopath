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



Route::get('/index', function () {
    return view('index');
});




Route::get('/user',['uses'=>'UserController@test1']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//開始
Route::get('/', function () {
    return view('log');
});



//登陸
Route::get('/logC', 'LogController@verify');


//訂單

Route::get('/detail', 'IndentController@detail');

Route::get('/list', 'IndentController@list');

