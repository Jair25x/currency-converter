<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExchangeRateService;

class ExchangeRateController extends Controller
{
    protected $exchangeRateService;

    public function __construct(ExchangeRateService $exchangeRateService)
    {
        $this->exchangeRateService = $exchangeRateService;
    }

    public function getExchangeRate($base, $target, $amount = null)
    {
        $rateData = $this->exchangeRateService->getExchangeRate($base, $target, $amount);

        return response()->json($rateData);
    }
}