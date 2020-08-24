<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

class WebHookController extends Controller
{
    public function handle(Request $request) {
        Log::info('Mollie roept webhook op');
        if (! $request->has('id')) {
            Log::info('Geen id voor deze betaling');
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            Log::info('Payement succeed');
        } else {
            Log::warning('Payement failed');
        }
    }
}
