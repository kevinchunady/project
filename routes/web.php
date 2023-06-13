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
Route::resources([
    'products' => ProductController::class,
]);
Route::resources([
    'customers' => CustomerController::class,
]);
Route::resources([
    'users' => UserController::class,
]);

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
});

require __DIR__.'/auth.php';
