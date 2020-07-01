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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test/{angka}', function ($angka) {
// 	return view('test',["angka"=>$angka]);
// });

// Route::get('/halo/{nama}', function ($nama) {
// 	return "halo $nama";
// });

// Route::get('/form', 'RegController@form');

// Route::get('/sapa', 'RegController@sapa');
// Route::post('/sapa', 'RegController@sapa_post');

Route::get('/', 'HomeController@home');
Route::get('/register','AuthController@register');
Route::post('/welcome', 'AuthController@register_post');
Route::get('/welcome', 'AuthController@welcome');