<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="title" content="Get Spotify Genres">
        <meta name="description" content="Want to see what Spotify don't want you to know? It is genres.">
        <meta name="keywords" content="Spotify, genres, api, laravel">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="Martin A Medina">

        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">

        <title>Get Spotify Genres</title>


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
