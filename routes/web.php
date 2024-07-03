<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentOrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment', [PaymentOrderController::class, 'store']);
