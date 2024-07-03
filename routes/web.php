<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\PaymentOrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment', [PaymentOrderController::class, 'store']);


// Todos routes
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
