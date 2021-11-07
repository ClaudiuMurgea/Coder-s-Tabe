<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Models\Customer;

Route::view('/', 'home');
Route::get('/contact', [ContactFormController::class, 'create']);
Route::post('/contact', [ContactFormController::class, 'store']);

Route::view('about', 'about');

// Route::get('/customers',                [CustomersController::class, 'index']);
// Route::post('/customers',               [CustomersController::class, 'store']);
// Route::get('/customers/create',         [CustomersController::class, 'create']);
// Route::get('/customers/{customer}',     [CustomersController::class, 'show']);
// Route::patch('/customers/{customer}',   [CustomersController::class, 'update']);
// Route::get('/customers/{customer}/edit',[CustomersController::class, 'edit']);
// Route::delete('/customers/{customer}',  [CustomersController::class, 'destroy']);

    Route::resource('customers', CustomersController::class);

