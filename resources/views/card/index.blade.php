@extends('layouts.app')

@section('title', 'CHRIHdaba')

@section('content')
    <section class="flex text-gray-600 body-font pt-24 px-64">
        <div class="flex flex-col">

            <div class="flex gap-8 items-center mr-16">
                <div
                    class="flex flex-col items-center bg-white md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('assets/images/product.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021.</p>
                    </div>
                </div>

                <div class="px-4 py-3">5 Mb/s</div>
                <div class="">
                    <form action="">
                        <input class="h-6 w-12" type="number" id="tentacles" name="tentacles" min="0"
                            max="100" />
                    </form>
                </div>
                <div class="px-4 py-3 text-lg text-gray-900">Free</div>
                <div class="w-10 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="delete">
                        <path
                            d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z">
                        </path>
                    </svg>
                </div>
            </div>

            <div class="flex gap-8 items-center mr-16">
                <div
                    class="flex flex-col items-center bg-white md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('assets/images/product.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021.</p>
                    </div>
                </div>

                <div class="px-4 py-3">5 Mb/s</div>
                <div class="">
                    <form action="">
                        <input class="h-6 w-12" type="number" id="tentacles" name="tentacles" min="0"
                            max="100" />
                    </form>
                </div>
                <div class="px-4 py-3 text-lg text-gray-900">Free</div>
                <div class="w-10 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="delete">
                        <path
                            d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z">
                        </path>
                    </svg>
                </div>
            </div>

            <div class="flex gap-8 items-center mr-16">
                <div
                    class="flex flex-col items-center bg-white md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('assets/images/product.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021.</p>
                    </div>
                </div>

                <div class="px-4 py-3">5 Mb/s</div>
                <div class="">
                    <form action="">
                        <input class="h-6 w-12" type="number" id="tentacles" name="tentacles" min="0"
                            max="100" />
                    </form>
                </div>
                <div class="px-4 py-3 text-lg text-gray-900">Free</div>
                <div class="w-10 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="delete">
                        <path
                            d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z">
                        </path>
                    </svg>
                </div>
            </div>

        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 xl:w-3/4 md:w-1/2 w-full">
                <div class="h-full p-6 rounded-lg bg-gray-100 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Order Summary</h2>

                    <table class="mt-4">
                        <tr>
                            <td>Price</td>
                            <td>$99.23</td>
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
                    <p class="mt-4">Discount Price</p>
                    <div class="flex justify-center items-center gap-4 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path stroke="red" stroke-linecap="round" stroke-width="1.5" d="M12 7v6"/><circle cx="12" cy="16" r="1" fill="red"/><path stroke="red" stroke-width="1.5" d="M7.843 3.802C9.872 2.601 10.886 2 12 2c1.114 0 2.128.6 4.157 1.802l.686.406c2.029 1.202 3.043 1.803 3.6 2.792c.557.99.557 2.19.557 4.594v.812c0 2.403 0 3.605-.557 4.594c-.557.99-1.571 1.59-3.6 2.791l-.686.407C14.128 21.399 13.114 22 12 22c-1.114 0-2.128-.6-4.157-1.802l-.686-.407c-2.029-1.2-3.043-1.802-3.6-2.791C3 16.01 3 14.81 3 12.406v-.812C3 9.19 3 7.989 3.557 7c.557-.99 1.571-1.59 3.6-2.792z"/></g></svg>
                        <span class="text-red-400">You must log in to use the discount code</span>
                    </div>
                    <hr class="mt-2">
                    <div class="flex justify-between my-2">
                        <h1>Total Price</h1>
                        <p>$110.13</p>
                    </div>
                    <button
                        class="mt-auto text-white bg-gray-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                        <span class="flex gap-4 justify-center">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 7.66667H6.5M16.5 7.66667C19.2614 7.66667 21.5 9.65651 21.5 12.1111V16.5556C21.5 19.0102 19.2614 21 16.5 21H6.5C3.73858 21 1.5 19.0102 1.5 16.5556V12.1111C1.5 9.65651 3.73858 7.66667 6.5 7.66667M16.5 7.66667V5.44444C16.5 2.98985 14.2614 1 11.5 1C8.73858 1 6.5 2.98985 6.5 5.44444V7.66667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                
                            Button
                        </span>
                        
                    </button>
                </div>
            </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-left w-full mb-10">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">You might also like</h1>
            </div>
            <div class="flex flex-row">
                <div class="p-2 lg:w-1/2 mr-8">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="{{ asset('assets/images/left.png') }}">
                        <div class="ml-2 flex-grow bg-gray-200 p-4 h-48 rounded-lg">
                            <h2 class="title-font my-2 font-medium text-lg text-gray-900">SHORT PRINTED DRESS</h2>
                            <p class="text-gray-500 mb-8"><span class="mr-2">$69.99</span>$129.99<span
                                    class="bg-red-500 text-white ml-2">- 40%</span></p>
                            <button class="group relative h-12 w-64 overflow-hidden rounded-lg bg-white text-lg shadow">
                                <div
                                    class="absolute inset-0 w-3 bg-primary transition-all duration-[250ms] ease-out group-hover:w-full">
                                </div>
                                <span class="relative text-black group-hover:text-white"><span
                                        class="text-gray-400 mr-2">$39</span>Add to card</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-2 lg:w-1/2 mr-8">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="{{ asset('assets/images/left.png') }}">
                        <div class="ml-2 flex-grow bg-gray-200 p-4 h-48 rounded-lg">
                            <h2 class="title-font my-2 font-medium text-lg text-gray-900">SHORT PRINTED DRESS</h2>
                            <p class="text-gray-500 mb-8"><span class="mr-2">$69.99</span>$129.99<span
                                    class="bg-red-500 text-white ml-2">- 40%</span></p>

                            <button class="group relative h-12 w-64 overflow-hidden rounded-lg bg-white text-lg shadow">
                                <div
                                    class="absolute inset-0 w-3 bg-primary transition-all duration-[250ms] ease-out group-hover:w-full">
                                </div>
                                <span class="relative text-black group-hover:text-white"><span
                                        class="text-gray-400 mr-2">$39</span>Add to card</span>
                            </button>

                        </div>
                    </div>
                </div>

                <div class="p-2 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="{{ asset('assets/images/left.png') }}">
                        <div class="ml-2 flex-grow bg-gray-200 p-4 h-48 rounded-lg">
                            <h2 class="title-font my-2 font-medium text-lg text-gray-900">SHORT PRINTED DRESS</h2>
                            <p class="text-gray-500 mb-8"><span class="mr-2">$69.99</span>$129.99<span
                                    class="bg-red-500 text-white ml-2">- 40%</span></p>

                            <button class="group relative h-12 w-64 overflow-hidden rounded-lg bg-white text-lg shadow">
                                <div
                                    class="absolute inset-0 w-3 bg-primary transition-all duration-[250ms] ease-out group-hover:w-full">
                                </div>
                                <span class="relative text-black group-hover:text-white"><span
                                        class="text-gray-400 mr-2">$39</span>Add to card</span>
                            </button>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
