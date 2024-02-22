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
                    {{-- <ul class="flex flex-col gap-2 max-w-[280px] mx-auto mt-24">

                        <li>
                                    <ul class="flex flex-col gap-4 pl-2 mt-4">
                                        @foreach ($categories as $category)
                                       <li>
                                        <button type="submit" class="category-tab flex flex-wrap w-40 border-l border-t border-b text-base font-medium rounded-l-md text-black bg-white hover:bg-gray-100 px-4 py-2" data-category="{{ $category->id }}">{{ $category->name }}</button>
                                       </li>
                                        @endforeach
                                    </ul>
                                </li>

                                </ul> --}}


                    <div method="" id="search_bar" class="relative mb-8 flex flex-col">
                        {{-- <div id="category-tabs" class="flex justify-center mb-4">
                            <button type="submit" class="mr-4 category-tab w-40 border-l border-t border-b text-base font-medium rounded-l-md text-black bg-white hover:bg-gray-100 px-4 py-2" data-category="all">All</button>

                            @foreach ($categories as $category)
                            <button type="submit" class="category-tab flex flex-wrap w-40 border-l border-t border-b text-base font-medium rounded-l-md text-black bg-white hover:bg-gray-100 px-4 py-2" data-category="{{ $category->id }}">{{ $category->name }}</button>
                            
                            @endforeach

                        </div> --}}
                        

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
                        <div class="w-30">
                            <ul class="mx-auto mt-10 ">
                                <li>
                                    <details class="group">
                    
                                        <summary
                                            class="flex items-center gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">
                    
                                            <span class="flex gap-2">
                    
                                                <img class="w-6 h-6 rounded-lg"
                                                    src="https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c"
                                                    alt="">
                    
                                                <span>
                                                    Here are our Categories
                                                </span>
                                            </span>
                                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                                </path>
                                            </svg>
                                        </summary>
                    
                                        <article class="px-4 pb-4">
                    
                                            <ul class=" pl-2 mt-4">
                    
                                                <li id="category-tabs" class="flex gap-4">
                                                    <button type="submit" class="mr-4 category-tab w-40 border-l border-t border-b text-base font-medium rounded-l-md text-black bg-white hover:bg-gray-100 px-4 py-2" data-category="all">All</button>
                                                    @foreach ($categories as $category)
                    
                                                    <button type="submit" class="category-tab flex flex-wrap w-40 border-l border-t border-b text-base font-medium rounded-l-md text-black bg-white hover:bg-gray-100 px-4 py-2" data-category="{{ $category->id }}">
                                                        <span class="short-text">{{ $category->name }}</span>
                                                        <span class="full-text" style="display: none;">{{ $category->name }}</span>
                                                    </button>
                                                    @endforeach
                                                </li>
                                            </ul>
                                        </article>
                                    </details>
                                </li>
                    
                            </ul>
                        </div>
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

