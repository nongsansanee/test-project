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

Route::get('/form',function() {
    return view('form');
 });



Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');

Route::get('/register',"RegisterController@index"); 
Route::any('register',"RegisterController@save");

Route::get('/testmenu',function() {
    return view('testmenu');
 });

 Route::get('/create-web',function() {
    return view('create-web');
 });




