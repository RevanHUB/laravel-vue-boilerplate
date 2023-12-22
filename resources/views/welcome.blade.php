<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{URL::asset('src/fonts.css')}}">
        @vite(['resources/js/app.js', 'resources/css/app.css' ])
    </head>
    <body class="antialiased">
            <div id="app">
                <Index :props="{{ json_encode($user) }}"  />
                <Welcome />
                <!-- Vue components will lay here -->
            </div>
        <script src="https://unpkg.com/vue@next"></script>
        <!-- Change it pre-production -->
    </body>
</html>
