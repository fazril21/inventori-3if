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
Route::get('/name/{nrp}/{name}', function ($nrp,$name) {
    return "Hello " . $nrp . $name;
});
Route::get('/person', 'PersonController@index');
Route::get('/person/show/{param}', 'PersonController@show');
Route::resource('/student', 'StudentController');
Route::get('/person/sendData', 'PersonController@sendData');
Route::get('/student', 'StudentController@index');
Route::get('/student/sendData', 'StudentController@sendData');
Route::get('/person/add', 'PersonController@add');
Route::post('/person/addProcess', 'PersonController@addProcess');


Route::get('my-academic/{course}/{task}/{quiz}/{mid_term}/{final}','StudentController@myCourse');