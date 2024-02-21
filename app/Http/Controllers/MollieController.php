<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{
    public function preparePayment(Request  $request)
    {
        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => $request->total_price . '.00', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Order #' . $request->card_id,
            'redirectUrl' => route('home'),
            // 'webhookUrl' => route('webhooks.mollie'),
            'metadata' => [
                'order_id' => $request->card_id,
            ],
        ]);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
}
