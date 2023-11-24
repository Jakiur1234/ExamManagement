{{-- Include all necessary file to main file --}}
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('document-title') {{-- Use for change document title --}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- yeild if style is need --}}
    @yield('style')
</head>

<body>


    @include('layout.navigation')

    @yield('body-section')

    @include('layout.footer')


    {{-- AOS for animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- Yeild if need any script from the main blade files --}}
    @yield('script')
</body>

</html>
