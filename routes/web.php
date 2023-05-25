<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('/layout');
});

Route::get('/register', function () {
    return view('/register');
});
Route::get('/home', function () {
    return view('/home');
});

Route::get('/farmers-transaction', function () {
    return view('/farmers-transaction');
});

Route::get('/farmers-report', function () {
    return view('/farmers-report');
});
