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
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/{name}', function ($name) {
    $name=strtoupper($name);
    return $name;
});
Route::get('/sum/{num1}/{num2}', function ($num1,$num2) {

    return $num1+$num2;
})->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
