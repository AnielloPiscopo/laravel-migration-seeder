<!DOCTYPE html>
<html lang="ita">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>
            @yield('title','Laravel Migration Seeder')
        </title>

        <link rel="stylesheet" href="{{Vite::asset('resources/css/general.css')}}">
        <link rel="stylesheet" href="{{Vite::asset('resources/css/app.css')}}">
    </head>

    <body>
        <main>
            @yield('main-content')
        </main>
    </body>
</html>