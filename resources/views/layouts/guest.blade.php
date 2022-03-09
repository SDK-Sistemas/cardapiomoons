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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">

    {{-- Theme --}}
    <meta name="msapplication-TileColor" content="#151515">
    <meta name="theme-color" content="#151515">

    <style>
        /**
        * Remover Espaço em /cardapio para versão mobile
        */
        @media screen and (max-width: 1200px){
            body  div.container div.page.travel-list.right-sidebar  div.page_body div.left_content  div.item_right {
                min-height: auto !important;
                padding-bottom: 0;
                padding-top: 0.5rem;
                text-align: center;
            }
        }
    </style>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1364932320597145');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1364932320597145&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

</head>

<body>
    <div class="container">

        <x-header></x-header>

        @yield('content')

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
