<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <link rel="stylesheet" href="/themes/MDB-Pro_4.19.2/css/bootstrap.css">
        <link rel="stylesheet" href="/themes/MDB-Pro_4.19.2/css/mdb.css">
        <link rel="stylesheet" href="/themes/MDB-Pro_4.19.2/css/style.css">

        @stack('styles')

    </head>
    <body>
        <div class="">
            {{ $slot }}
        </div>



        <script src="/themes/MDB-Pro_4.19.2/js/jquery.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/bootstrap.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/mdb.js"></script>

        @stack('scripts')
    </body>
</html>
