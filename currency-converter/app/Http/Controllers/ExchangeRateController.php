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

    public function getExchangeRate(Request $request, $base, $target)
    {
        $amount = $request->query('amount'); // Obtener el monto opcional desde la query string

        $rateData = $this->exchangeRateService->getExchangeRate($base, $target, $amount);

        return response()->json($rateData);
    }
}