@extends('layouts.app')

@section('title', 'CHRIHdaba')

@section('content')
    <section class="sm:flex sm:flex-col lg:grid lg:grid-cols-3 text-gray-600 body-font pt-24 lg:px-64">
        <div class="lg:col-span-2 flex flex-col  gap-4">
            @if (count($cardProducts) === 0)
            <div class="text-lg font-bold  text-gray-900">Your cart is empty.</div>
            @else
            {{ $card->totalAmount}}
                @foreach ($cardProducts as $cardProduct)
                    <div class="flex gap-4 w-auto justify-between items-center mr-16">
                        <div
                            class="flex flex-col items-center bg-white md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="{{ asset('storage/' . $cardProduct->image) }}" alt="Product Image">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $cardProduct->name }}
                                </h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $cardProduct->description }}
                                </p>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-lg text-gray-900">{{ $cardProduct->price }} $</div>
                        <button id="deleteFromCart" data-product-id="{{ $cardProduct->id }}"
                            class="mt-4 font-semibold text-red-400 text-sm">
                            Remove
                        </button>
                    </div>
                    <?php $card->totalAmount += $cardProduct->price; ?>
                @endforeach
                @endif
        </div>
        <div class="lg:col-span-1 flex flex-wrap">
            <div class="p-4 xl:w-3/4 md:w-1/2 w-full">
                <div class="h-full p-6 rounded-lg bg-gray-100 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Order Summary</h2>
                    @if(count($cardProducts) === 0)
                    <table class="mt-4">
                        <tr>
                            <td>Price</td>
                            <td id=""> $0</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            Discount Price
                        </tr>

                    </table>
                    @else
                    <table class="mt-4">
                        <tr>
                            <td>Price</td>
                            <td> ${{ $card->totalAmount }}</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>${{ $card->totalAmount / 100 }}</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$10</td>
                        </tr>
                        <tr>
                            Discount Price
                        </tr>

                    </table>
                    <p class="mt-4">Discount Price</p>
                    @auth
                        <hr class="mt-2">
                        <div class="flex justify-between my-2">
                            <h1>Total Price</h1>
                            <p>{{ $card->totalAmount + $card->totalAmount / 100 + 10 }}</p>
                        </div>
                        <form action="{{ route('prepare.payment') }}" method="post">
                            @csrf 
                            <input type="hidden" name="total_price" value="{{ $card->totalAmount }}">
                            <input type="hidden" name="card_id" value="{{ $card->id }}">
                            <button type="submit"
                                class="mt-auto text-white bg-gray-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                                <span class="flex gap-2 justify-center items-center">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 7.66667H6.5M16.5 7.66667C19.2614 7.66667 21.5 9.65651 21.5 12.1111V16.5556C21.5 19.0102 19.2614 21 16.5 21H6.5C3.73858 21 1.5 19.0102 1.5 16.5556V12.1111C1.5 9.65651 3.73858 7.66667 6.5 7.66667M16.5 7.66667V5.44444C16.5 2.98985 14.2614 1 11.5 1C8.73858 1 6.5 2.98985 6.5 5.44444V7.66667"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="text-xl">Checkout</span>
                                </span>
                            </button>
                        </form>
                        @else
                        <div class="flex justify-center items-center gap-4 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path stroke="red" stroke-linecap="round" stroke-width="1.5" d="M12 7v6" />
                                    <circle cx="12" cy="16" r="1" fill="red" />
                                    <path stroke="red" stroke-width="1.5"
                                    d="M7.843 3.802C9.872 2.601 10.886 2 12 2c1.114 0 2.128.6 4.157 1.802l.686.406c2.029 1.202 3.043 1.803 3.6 2.792c.557.99.557 2.19.557 4.594v.812c0 2.403 0 3.605-.557 4.594c-.557.99-1.571 1.59-3.6 2.791l-.686.407C14.128 21.399 13.114 22 12 22c-1.114 0-2.128-.6-4.157-1.802l-.686-.407c-2.029-1.2-3.043-1.802-3.6-2.791C3 16.01 3 14.81 3 12.406v-.812C3 9.19 3 7.989 3.557 7c.557-.99 1.571-1.59 3.6-2.792z" />
                                </g>
                            </svg>
                            <span class="text-red-400">You must log in to use the discount code</span>
                        </div>
                        <hr class="mt-2">
                        <div id="totalAmount" class="flex justify-between my-2">
                            <h1>Total Price</h1>
                            <p>{{ $card->totalAmount }}</p>
                        </div>
                        <button
                            class="mt-auto text-white bg-gray-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                            <span class="flex gap-2 justify-center items-center">
                                <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.5 7.66667H6.5M16.5 7.66667C19.2614 7.66667 21.5 9.65651 21.5 12.1111V16.5556C21.5 19.0102 19.2614 21 16.5 21H6.5C3.73858 21 1.5 19.0102 1.5 16.5556V12.1111C1.5 9.65651 3.73858 7.66667 6.5 7.66667M16.5 7.66667V5.44444C16.5 2.98985 14.2614 1 11.5 1C8.73858 1 6.5 2.98985 6.5 5.44444V7.66667"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="text-xl">Checkout</span>
                            </span>
                        </button>
                        @endauth
                </div>
            </div>
            @endif  
    </section>

    <section class="text-gray-600 body-font">
        <div class="relative container px-5 py-24 mx-auto">
            <div class="flex justify-between w-full mb-10">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">You might also like</h1>
                <a href="product">
                    <div class="absolute -bottom-6 right-40 flex items-center gap-2">
                        <p>See more</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="black" d="M8 5.14v14l11-7z" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="flex flex-row">
                @foreach ($suggest as $suggest)
                    <div class="p-2 lg:w-1/2 mr-8">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center sm:text-left">
                            <img alt="team" class="rounded-lg w-48 h-full sm:mb-0 "
                                src="{{ asset('storage/' . $suggest->image) }}" alt="product image" />
                            <div class="flex-grow bg-gray-200 p-4 h-48 rounded-lg">
                                <h2 class="title-font my-2 font-medium text-lg text-gray-900">{{ $suggest->name }}</h2>
                                <p class="text-gray-500 mb-8"><span class="mr-2">{{ $suggest->price }} $</p>
                                <form action="{{ Route('card.add') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="id" value="{{ $suggest->id }}">
                                    <button type="submit"
                                        class="text-white bg-blue-600 hover:bg-blue-800 rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Add
                                        to cart
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('scripts')
@if(count($cardProducts) > 0)
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).on('click', '#deleteFromCart', function(e) {
            e.preventDefault(); // Prevent the default form submission behavior

            var productId = $(this).data('product-id'); 

            // Make AJAX request to remove product from cart
            $.ajax({
                url: '/deleteFromCard',
                type: 'delete',
                data: {
                    id: productId
                },
                success: function(response) {
                    if (response.success) {
                        var productContainer = $('[data-product-id="' + productId + '"]');

                        productContainer.remove();
                    }
                    window.location.reload(true);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    </script>
@endif

@endsection
