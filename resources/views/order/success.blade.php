@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order Confirmation</div>
                    <div class="card-body">
                        <p>Your order has been successfully placed.</p>
                        {{-- <p>Order Reference: {{ $order->reference }}</p> --}}
                        {{-- <p>Total Amount: ${{ $order->total_amount }}</p> --}}
                        <!-- You can display additional order details here -->
                        <p>Thank you for your purchase!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection