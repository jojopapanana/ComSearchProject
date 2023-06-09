<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
        <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @if(isset($navbar))
            <x-navbar />
        @elseif(isset($navbarAdmin))
            <x-navbar-admin />
        @endif
        <main class="mt-5 pt-5 d-flex flex-column min-vh-100">
            {{ $slot }}
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>