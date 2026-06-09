<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @endif

        {{ $head ?? '' }}
    </head>

    <body>
        <div class="app">
            <div class="container">
                <img class="banner" src="{{ asset('/images/akvamet.jpg') }}" alt="akvamet">

                @include('partials.header')

                <main class="main">
                    {{ $slot }}
                </main>

                @include('partials.footer')
            </div>
        </div>

        {{ $scripts ?? '' }}
    </body>

</html>
