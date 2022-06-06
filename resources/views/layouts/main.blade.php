<!DOCTYPE html>
<html>

@include('partials.head')

<body class="flex flex-col min-h-screen h-full items-center justify-start">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer-contact')
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('custom-script')
</body>

</html>
