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

Route::get('/report', function () {
    return view('report');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/customers', function () {
    return view('customers');
});

Route::get('/users', function () {
    return view('users');
});

require __DIR__.'/auth.php';
