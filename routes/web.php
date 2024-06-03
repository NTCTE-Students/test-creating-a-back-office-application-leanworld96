<?php

use Illuminate\Support\Facades\Route;

Route::resource('users', UsersController::class);
Route::resource('clients', ClientsController::class);
Route::resource('Order', OrderController::class);
Route::resource('Inventory', InventoryController::class);
Route::resource('Finance', FinanceController::class);
Route::resource('Mail', MailController::class);
Route::get('/', function () {
    return view('welcome');
    
});
