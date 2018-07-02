<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- layouts folder, input codes here to inc it in every page -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- adding the css file in bootstrap and everthing compiled -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name', 'Management Software')}}</title>
        <!-- changed the title in .env file -->

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
            <!-- installed extension for laravel blade snippet to use this -->
        </div>

    </body>
</html>
