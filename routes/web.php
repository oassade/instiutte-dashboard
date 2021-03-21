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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', "App\Http\Controllers\TeamController@index");

Route::get('/library', "App\Http\Controllers\LibraryController@index");

Route::get('/makal/{id}', "App\Http\Controllers\ArticleController@show");

Route::get('/khabar/{id}', "App\Http\Controllers\AkhbarController@show");
Route::get('/makalat', "App\Http\Controllers\ArticleController@index");
Route::get('/news', "App\Http\Controllers\AkhbarController@index");

Route::get('/faq', "App\Http\Controllers\FaqController@index");


Route::get('/register', function () {
    return view('register');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
