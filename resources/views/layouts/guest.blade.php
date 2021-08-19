<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Icons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-32x32.png" sizes="32x32') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon.ico') }}">

    {{-- Theme --}}
    <meta name="msapplication-TileColor" content="#151515">
    <meta name="theme-color" content="#151515">
</head>

<body>
    <div class="container">

        <x-header>
        </x-header>

        @yield('content')

        <x-instagram-grid>
        </x-instagram-grid>

        <x-footer>
        </x-footer>

    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/lightgallery.js') }}"></script>
    <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/hammer.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
