<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title') - {{ config('app.name', 'Job Board') }}</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script rel="preload" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/nice-select2.js') }}"></script>

    @yield('styles')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <header class="">
        @include ('components/nav')
    </header>

    <main class="main-wrapper auth">

        @yield('content')

    </main>
    <footer>
        @include ('components/footer')
        <div class="copyright">
            <div class="copyright_container">
                <p>© {{ date('Y') }} {{ config('app.name', 'Job Board') }}. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>

</html>
