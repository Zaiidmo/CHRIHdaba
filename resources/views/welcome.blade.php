@extends('layouts.app')

@section('title', 'CHRIHdaba')

@section('content')
    <section>
        <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:py-16 lg:px-6">
            <div class="font-light h-full col-span-2 text-gray-500 sm:text-lg dark:text-gray-400">
                <div class="flex flex-col justify-between w-full h-full p-6 bg-white border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700"
                    style="background-image: url('https://img.freepik.com/free-photo/3d-illustration-smartphone-with-products-coming-out-screen-online-shopping-e-commerce-concept_58466-14529.jpg')">
                    <div class="h-fit">
                        <h1 class="mb-4 text-5xl font-bold font-salsa  tracking-tight text-gray-900 dark:text-white">Welcome
                            to CHRIHdaba
                        </h1>
                        <p class="mb-4">CHRI</p>
                    </div>
                    <div>
                        @auth
                            <a href="discover"
                                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-800  rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Discover Out Store
                            </a>
                        @else
                            <a href="discover"
                                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-800  rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Discover Out Store
                            </a>
                            <a href="register" id="register"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-gray-800 dark:text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Get started
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="h-full lg:grid grid-cols-1 gap-6">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a
                                help
                                in Claim?</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            See our guideline
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a
                                help
                                in Claim?</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            See our guideline
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-poppins tracking-wider font-bold text-white">Most Popular Categories
                </h2>
            </div>
            <div class="grid gap-8 mb-6 md:mb-16 md:grid-cols-2 md:grid-rows-2">
                {{-- Category --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions
                            2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                {{-- Category --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions
                            2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                {{-- Category --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions
                            2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                {{-- Category --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-poppins tracking-wider font-bold text-primary">New Arrivals
                </h2>
            </div>
            <div class="grid gap-8 mb-6 md:mb-16 md:grid-cols-2 lg:grid-cols-4">
                {{-- Items --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                {{-- Items --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                {{-- Items --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                {{-- Items --}}
                <div class="col-span-1 p-6 bg-white border border-gray-200 rounded-lg shadow "">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="grid w-screen grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

        </div>
    </section>

@endsection
