<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ExchangeRateService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = "https://v6.exchangerate-api.com/v6/";
        $this->apiKey = env('EXCHANGE_API_KEY'); 
    }

    public function getExchangeRate($base, $target, $amount = null)
    {
        // Construir la URL con o sin el monto opcional
        $url = $this->apiUrl . $this->apiKey . "/pair/{$base}/{$target}" . ($amount ? "/{$amount}" : "");

        // Desactivar verificación SSL (solo en desarrollo)
        $response = Http::withoutVerifying()->get($url);

        // Manejo de errores
        if (!$response->successful()) {
            return [
                'error' => 'Unable to fetch exchange rates',
                'status' => $response->status(),
                'message' => $response->json(),
            ];
        }

        $data = $response->json();

        if ($data['result'] === 'error') {
            return [
                'error' => 'Invalid currency pair or API issue',
                'details' => $data['error-type'] ?? 'Unknown error',
            ];
        }

        // Retornar la tasa de conversión y el resultado si se proporcionó una cantidad
        return [
            'base_currency' => $data['base_code'],
            'target_currency' => $data['target_code'],
            'exchange_rate' => $data['conversion_rate'],
            'converted_amount' => $data['conversion_result'] ?? null,
        ];
    }
}