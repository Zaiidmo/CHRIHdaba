@extends('layouts.app')

@section('title', 'CHRIHdaba')

@section('content')

<section class="text-gray-600 body-font overflow-hidden">
   
	<div class="container px-5 py-14 mx-auto">
        <div class="ml-40 bg-gray-300 text-black inline-block p-2 mb-4 rounded-3xl">
            CHRIH daba > Products > Clothes > SHORT PRINTED DRESS
        </div>
        
	  <div class="lg:w-4/5 mx-auto flex">
		<img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64"  style="border-radius: 3rem;" src="{{ asset('storage/' . $product->image)}}">
		<div class="lg:w-1/2 w-full lg:pl-10 lg:py-10 mt-6 lg:mt-0">
		  
		  <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->name}}</h1>
          <p class="text-xl fonct-bold">{{ $product->price }}</p>
		  
		  <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
			<div class="flex">
			  <span class="mr-3">Color</span>
			  <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
			  <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
			  <button class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
			</div>
			<div class="flex ml-6 items-center">
			  <span class="mr-3">Size</span>
			  <div class="relative">
				<select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
				  <option>SM</option>
				  <option>M</option>
				  <option>L</option>
				  <option>XL</option>
				</select>
				<span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
				  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
					<path d="M6 9l6 6 6-6"></path>
				  </svg>
				</span>
			  </div>
			</div>
		  </div>
          <div class="flex gap-4">
            <span>Shipping</span>
            <div>
                <h3>Free Shipping to Your Location</h3>
                <p>Delivery Time: 14–17 days</p>
            </div>
          </div>

          <div class="flex gap-4 mt-8">
            <h3>Quantity</h3>
			<form action="">
            	<input class="h-6" type="number" id="tentacles" name="tentacles" min="0" max="100" />
			</form>
            <p>50 available / 104 sold</p>
          </div>

		  <div class="flex">
			{{-- <span class="title-font font-medium text-2xl text-gray-900">$58.00</span> --}}
			<div class="mt-4 bg-gray-200 rounded-lg	p-4">
				<h3 class="text-black text-xl text-fontbold">$79.98</h3>
				<hr class="my-6 border-gray-400 sm:mx-auto dark:border-gray-700 lg:my-8" />
				<div class="flex justify-items-center justify-center gap-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="currentColor" d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0m0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01M736 480H544V288c0-17.664-14.336-32-32-32s-32 14.336-32 32v192H288c-17.664 0-32 14.336-32 32s14.336 32 32 32h192v192c0 17.664 14.336 32 32 32s32-14.336 32-32V544h192c17.664 0 32-14.336 32-32s-14.336-32-32-32"/></svg>
					<p>Add shipping insurance for $9( declared value  only if the package gets lost, stolen or damaged.)</p>
				</div>
			</div>
			
		  </div>

		  <div class="flex gap-4 mt-8 justify-center p-0">
			<button class="group relative h-12 w-64 overflow-hidden rounded-lg bg-white text-lg shadow">
				<div class="absolute inset-0 w-3 bg-primary transition-all duration-[250ms] ease-out group-hover:w-full"></div>
				<span class="relative text-black group-hover:text-white">Shop now</span>
			</button>
			
			<form action="{{ Route('card.add') }}" method="POST">
				@csrf
				@method('POST')
				<input type="hidden" name="id" value="{{ $product->id }}">
			
				<button type="submit" class="group relative h-12 w-64 overflow-hidden rounded-lg bg-white text-lg shadow">
					<div class="absolute inset-0 w-3 bg-gray-200 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
					<div class="flex gap-4 px-4">
						<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.75 6.5L9.75 7.5C9.75 9.15685 11.0931 10.5 12.75 10.5C14.4069 10.5 15.75 9.15685 15.75 7.5V6.5" stroke="#434343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M21.4165 13.5L20.3069 6.8424C19.9855 4.91365 18.3167 3.5 16.3613 3.5H9.13836C7.183 3.5 5.51424 4.91365 5.19278 6.8424L3.52612 16.8424C3.11976 19.2805 4.99994 21.5 7.47169 21.5H13.7499" stroke="#434343" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M19.75 15.5L19.75 21.5" stroke="#434343" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M22.75 18.5L16.75 18.5" stroke="#434343" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<span class="relative text-black group-hover:text-white">Add to basket</span>
					</div>
				</button>
		  </div>

		</div>
	  </div>
            
        
    </div>

<section class="">
	<div class="px-60 ml-10 text-2xl poppins"><h1>You May Also Like</h1></div>
	<div class="flex flex-wrap justify-center items-center">
		@foreach ($suggest as $suggest)
		<div class="relative m-4 w-full max-w-sm bg-white border border-black rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
			<a href="#">
				<img class="pb-8 rounded-t-lg" src="{{ asset('storage/' . $suggest->image)}}" alt="product image" />
			</a>
			<div class="px-5 pb-5">
				<div class="flex flex-row justify-between mb-4">
				<div>
					<a href="{{ route('product.show', $product->id) }}">
						<h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $suggest->name }}</h5>
					</a>
					<p>Al Karam</p>
				</div>
				<div class="flex items-center mt-2.5 mb-5">
					<div class="flex items-center space-x-1 rtl:space-x-reverse">
						<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
							<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
						</svg>
						<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
							<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
						</svg>
						<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
							<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
						</svg>
						<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
							<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
						</svg>
						<svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
							<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
						</svg>
					</div>
				  
				</div>
			</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="px-64 flex items-center">
		<a class="ml-auto" href="{{route('product.index')}}">
			<div class=" flex items-center gap-2">
				<p>For more items</p>
				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
					<path fill="currentColor" fill-rule="evenodd" d="M2.5 7.5a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m15 0a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m-7.274 0a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5"/>
				</svg>
			</div>
		</a>
	</div>	
	
</section>

		

</section>

@endsection