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
    echo "hell";
});
Route::get('/name/{a}/{b}', function($a,$b){
    echo "hello ".$a;
    echo "<br>ID: ".$b;
});
Route::get('/home', "HomeController@index");
