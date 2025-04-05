<?php

use App\Http\Controllers\ExchangeRateController;
use Illuminate\Support\Facades\Route;

Route::get('/exchange/{base}/{target}/{amount?}', [ExchangeRateController::class, 'getExchangeRate']);
