<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="Description" content="Venez porfiter de nos pizza fait et preparer avec amours a recuperer chez nous ou a votre domicile">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href='https://fonts.googleapis.com/css?family=Gilda Display' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/script.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    
    </head>

    <body class="position-relative bg-white">

        <header class="position-sticky bg-dark top-0" style="z-index:5">
            @include('inc.navigation')
        </header>

        <main class=" position-relative">
            @yield('content')
        </main>

        <footer class="w-100">
            @include('inc.footer')
        </footer>

    </body>
</html>
