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
Route::get('/hello/{name}/{name1}',function($name,$name1){
    echo "hello"."<br/>".$name."<br/>".$name1;
});

// Route::get('/calc','helloController@index');
// Route::post('/calc','helloController@add');
Route::get('/multiple','newController@index');
Route::post('/multiple','newController@multi');
