<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
use App\Http\Controllers\CrudController;

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
    return view('home');
})->name('homepage');
Route::get('/about', function () {
    return view('about');
})->name('aboutpage');
Route::get('/kontact', function () {
    return view('contact');
})->name('contactpage');
Route::get('/about/{name}', function ($name) {
    $name=strtoupper($name);
    return $name;
});
Route::get('/sum/{num1}/{num2}', function ($num1,$num2) {

    return $num1+$num2;
})->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
Route::get('/multy/{num1}',[MathController::class, 'multy'])->where(['num1'=>'[0-9]+']);
// Route::get('/sum/{num1}/{num2}',[MathController::class, 'sum'])->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
Route::group(['prefix'=>'math'],function(){
    Route::get('/sum/{num1}/{num2}',[MathController::class, 'sum'])->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
    Route::get('/sub/{num1}/{num2}',[MathController::class, 'sub'])->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
    Route::get('/sub',[MathController::class, 'sub']);
});

Route::resource('/country',CrudController::class);

