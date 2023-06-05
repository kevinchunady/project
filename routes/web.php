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

Route::prefix('insertion/')->group(function(){
    Route::get('/add-order', function () {
        return view('insertion.add-order');
    });
    Route::get('/sales-order', function () {
        return view('insertion.sales-order');
    });
    Route::get('/delivery-order', function () {
        return view('insertion.delivery-order');
    });
    Route::get('/accounting', function () {
        return view('insertion.accounting');
    });
    Route::get('/add-product', function () {
        return view('insertion.add-product');
    });
    Route::get('/add-customer', function () {
        return view('insertion.add-customer');
    });
    Route::get('/add-user', function () {
        return view('insertion.add-user');
    });
});

require __DIR__.'/auth.php';
