<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title-tab')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
