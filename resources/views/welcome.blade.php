<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{URL::asset('src/fonts.css')}}">
        @if(filter_var($_ENV['PRODUCTION'], FILTER_VALIDATE_BOOLEAN) == true)
            <!-- Production resources goes here! -->
            <!-- Deploy the server on XAMPP / NGINX TO SEE THE CONTENT -->
            <link rel="stylesheet" href="{{URL::asset('build/assets/app-<cambiar>.css')}}">
            <script src="{{URL::asset('build/assets/app-<cambiar>.js')}}" type="module"></script>
        @else
            <!-- Development resources goes here! -->
            <!-- This will work only if we have executed the app with VITE -->
            @vite(['resources/js/app.js', 'resources/css/app.css'])
        @endif
    </head>
    <body class="antialiased">
            <div id="app">
                <Index />
                <Welcome />
                <!-- Vue components will lay here -->
            </div>
        <script src="https://unpkg.com/vue@next"></script>
        <!-- Change it pre-production -->
    </body>
</html>
