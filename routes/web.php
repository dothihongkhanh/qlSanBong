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
// route client
Route::get('/', function () {
    return view('client.home.index');
});

Route::get('/home', function () {
    return view('client.home.index');
});

Route::get('/fields', function () {
    return view('client.fields.index');
});
