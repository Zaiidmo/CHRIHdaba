<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;

class OrderController extends Controller
{
    public function index(Order $order)
    {
        $order = Order::where('user_id', Auth::id())->get();
        return view('order', compact('order'));
    }
    public function preparePayment(Request $request)
    {
        $user = Auth::user();
        $cart_id = $request->card_id;
        $order = Order::create([
            'totalAmount' => $request->total_price,
            'status' => 'pending',
            'card_id' => $cart_id,
        ]);
        $user->orders()->save($order);
        // $order->cart()->attach(cart_id);
        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'USD',
                'value' => $request->total_price . '.00', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Order #' . $cart_id,
            'redirectUrl' => route('success'),
            // 'webhookUrl' => route('webhooks.mollie'),
            'metadata' => [
                'order_id' => $cart_id,
            ],
        ]);
        session(['payment_id' => $payment->id]);
        session(['order_id' => $order->id]);
        // $user->cart()->detach($cart_id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
    public function success(Request $request)
    {
        $payment_id = session('payment_id');
        $payment = Mollie::api()->payments->get($payment_id);
        if ($payment->isPaid()) {
            $orderId = session()->get('order_id');
            $order = Order::find($orderId);
            $payment = Payment::create([
                'reference' => $request->total_price,
                'order_id' => $orderId,
            ]);

            $payment->save();
            $order->update([
                'status' => 'paid',
            ]);
            session()->forget('payment_id');
            session()->forget('order_id');
            $user = Auth::user();
            $user->cart->products()->detach();
            return redirect('/')->with('success', 'Your payment is done with success');
        } else {
            return redirect()->route('cancel');
        }
    }
    public function cancel(Request $request)
    {
        $order = Order::where('user_id', Auth::id())->latest()->first();
        $order->update([
            'status' => 'cancelled',
        ]);
        return redirect('/')->with('success', 'Your payment is done with success');
    }
}
