@extends('layouts.app')

@section('title', 'CHRI PRODUCTS')

@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-14 mx-auto flex flex-wrap">
            <div class="lg:w-full mx-auto">

                <div class="relative border-gray-300 py-10 mb-4 rounded-xl">
                    <div class="absolute top-0 left-3"><img src="{{ asset('assets/images/Bubbles.png') }}" alt="">
                    </div>
                    <div class="absolute bottom-20 right-0"><img src="{{ asset('assets/images/Bubbles.png') }}" alt="">
                    </div>

                    <div class="relative max-w-screen-lg text-center mx-auto">
                        <h2 class="mb-12 text-5xl font-salsa font-semibold text-gray-900">Dive into a World of Wonders with CHRIHdaba's Spectacular Selections!</h2>
                    </div>

                    <div method="" id="search_bar" class="mb-8 flex flex-col">
                        <div id="category-tabs" class="flex justify-center mb-4">
                            <button type="submit" class="mr-4 category-tab w-40 bg-gradient-to-r from-blue-500 to-red-500 text-white px-4 py-2 text-xl rounded font-medium focus:ring ring-black ring-opacity-10 gradient element-to-rotate" data-category="all">All</button>

                            @foreach ($categories as $category)
                            <button type="submit" class="mr-4 category-tab w-40 bg-gradient-to-r from-blue-500 to-red-500 text-white px-4 py-2 text-xl rounded font-medium focus:ring ring-black ring-opacity-10 gradient element-to-rotate" data-category="{{ $category->id }}">{{ $category->name }}</button>
                            @endforeach

                        </div>

                        <label class="mx-auto mt-8 relative bg-white min-w-sm max-w-2xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-2xl gap-2 shadow-2xl focus-within:border-gray-300"
                            for="search-bar">
                            <input type="search" id="search" placeholder="your keyword here" name=""
                                class="px-6 py-2 w-full rounded-md flex-1 outline-none bg-white" required="">
                            <button type="submit" name="submit"
                                class="w-full md:w-auto px-6 py-3 bg-primary-300 border-primary-100 text-black fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                                <div class="flex items-center transition-all opacity-1">
                                    <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                                        Search
                                    </span>
                                </div>
                            </button>
                        </label>
                    </div>
                    
                    <div id="place" class="flex flex-wrap justify-center items-center">
                        @foreach ($products as $product)
                        
                        <div id="card"
                            class="relative m-4 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ route('product.show', $product->id) }}">
                                <img class="pb-8g rounded-t-lg" src="{{ asset('storage/' . $product->image)}}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex flex-row justify-between mb-4">
                                    <div>
                                        <a href="#">
                                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                {{ $product->name }}</h5>
                                        </a>
                                        <p>Al Karam</p>
                                    </div>
                                    <div class="flex items-center mt-2.5 mb-5">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>

                                <p class="mt-2">(4.1k) Customer Reviews</p>
                                <div class="mt-2 flex items-center justify-between">
                                    <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ $product->price }} $</span>
                                    <form action="{{ Route('card.add') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="id" value="{{ $product->id }}">
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

            </div>
        </div>

    </section>
 
@endsection

