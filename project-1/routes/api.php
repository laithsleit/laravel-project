<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::post('/payment', [StripeController::class, 'processPayment']);
