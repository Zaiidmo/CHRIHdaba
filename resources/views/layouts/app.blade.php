@include('layouts.head')

<body >
    <!-- Navbar -->
    @include('layouts.header')

    <!--  Main Content -->

    @yield('content')

    @include('layouts.footer')
</body>
@include('layouts.foot')
