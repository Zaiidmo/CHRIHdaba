<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<header class="w-screen bg-primary">
    <nav class="container mx-auto w-full flex justify-between items-center h-full px-6 text-gray-600 z-40 py-3 relative">

        <a class="text-2xl flex items-center justify-between font-bold font-salsa text-white" href="/">
            CHRIH <span class="ml-2 font-salsa text-sm">daba</span>
        </a>

        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-violet-600 dark:text-gray-100 p-1" id="navbar_burger">
                <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Hamberger menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>


        @auth
            <ul class="flex align-middle items-center justify-center space-x-6">
                <li class="relative z-50">
                    <a href="/card" target="_blank" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path fill="currentColor"
                                d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z" />
                        </svg>
                    </a>
                </li>
                <li class="relative z-50">
                    <button id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M10.5 5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0m.514 2.63a4 4 0 1 0-6.028 0A4.002 4.002 0 0 0 2 11.5V13a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1.5a4.002 4.002 0 0 0-2.986-3.87M8 9H6a2.5 2.5 0 0 0-2.5 2.5V13a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-1.5A2.5 2.5 0 0 0 10 9z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </li>
                {{-- Menu --}}
                <!-- Dropdown menu -->
                <div id="dropdownBgHover" class="z-10 hidden w-fit p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li class="profile-img flex justify-around gap-2">
                            <img class="w-10 h-10" src="{{ asset('/storage/users/default.png') }}"
                                alt="{{ Auth::user()->name }}  profile">
                            <div class="mb-2 border-b profile-body">
                                <h5>{{ Auth::user()->name }}</h5>
                                <h6>{{ Auth::user()->email }}</h6>
                            </div>
                        </li>
                        @if (Auth::user()->hasRole('admin'))
                            <li>
                                <a href="/admin"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                        @endif
                        <li>
                            <a href="admin/profile"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="/logout"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            @else
                <button id="login-btn"
                    class=" py-1.5 px-3 m-1 text-center bg-gray-100  rounded-md text-black hover:bg-gray-100 lg:inline-block ">
                    Sign In
                </button>
            @endauth
    </nav>



    <!-- mobile navbar -->
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-50"></div>
        <nav
            class="fixed bg-white dark:bg-gray-600 top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 border-r overflow-y-auto">

            <div class="flex items-center mb-8">
                <a class="mr-auto text-2xl font-bold text-black dark:text-gray-100" href="/">
                    TailwindFlex
                </a>

                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <div class=" relative mx-auto text-gray-600">
                <input
                    class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none dark:placeholder-gray-200 dark:bg-gray-500 dark:border-gray-50"
                    type="search" name="search" placeholder="Search">

                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>

            </div>

            <div class="lg:flex">
                <div>
                    <span class="hidden" id="util_data"></span>
                    <a class=" py-1.5 px-3 m-1 text-center bg-gray-100  rounded-md text-black hover:bg-gray-100 lg:inline-block "
                        href="/">
                        Sign In
                    </a>
                </div>
            </div>
        </nav>
    </div>

</header>
