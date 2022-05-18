<!DOCTYPE html>
<html>

@include('partials.head')

<body class="flex flex-col min-h-screen h-full w-full items-center justify-start">
    @include('partials.navbar-logo')
    @yield('content')
    @stack('custom-script')
</body>

</html>
