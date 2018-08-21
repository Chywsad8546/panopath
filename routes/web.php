<?php

Route::get('/index', function () {
    return view('index');
});

Route::get('/user',['uses'=>'UserController@test1']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//開始
Route::get('/', function () {
    return view('log', [ 'faild' => "" ]);
});

//登陸
Route::post('/logC', 'LogController@verify');

//注销
Route::get('/logOut', 'LogController@logOut');


//服务类型
Route::resource('services','ServicesController');

//订单详情页
Route::get('/details/{id}', 'IndentController@detail');

//訂單

Route::resource('/list', 'IndentController');

