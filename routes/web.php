<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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

Route::get('/reports', [ReportController:: class, 'read'])->name('reports');
Route::get('/products', [ProductController:: class, 'read'])->name('products');
Route::get('/customers', [CustomerController:: class, 'read'])->name('customers');
Route::get('/users', [UserController:: class, 'read'])->name('users');

Route::prefix('insertion/')->group(function(){
    Route::get('/add-order', function () {
        return view('insertion.add-order');
    })->name('add-order');
    Route::get('/sales-order', function () {
        return view('insertion.sales-order');
    })->name('sales-order');
    Route::get('/delivery-order', function () {
        return view('insertion.delivery-order');
    })->name('delivery-order');
    Route::get('/accounting', function () {
        return view('insertion.accounting');
    })->name('accounting');
    Route::get('/add-product', function () {
        return view('insertion.add-product');
    })->name('add-product');
    Route::get('/add-customer', function () {
        return view('insertion.add-customer');
    })->name('add-customer');
    Route::get('/add-user', function () {
        return view('insertion.add-user');
    })->name('add-user');
});

require __DIR__.'/auth.php';
