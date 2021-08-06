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
        <link rel="stylesheet" href="/themes/MDB-Pro_4.19.2/css/addons/mdb-file-upload.css">
        
        @livewireStyles

        @stack('styles')


    </head>
    <body class="">
        @include('dashboard.includes.mega_menu')
        <div class="">

            <main>
                {{ $slot }}
            </main>
        </div>



        
        <script src="/themes/MDB-Pro_4.19.2/js/jquery.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/bootstrap.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/mdb.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/howler.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/collect.min.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/dropzone.js"></script>
        <script src="/themes/MDB-Pro_4.19.2/js/addons/mdb-file-upload.js"></script>
        @livewireScripts
        <!-- scripts -->
        @stack('scripts')
    </body>
</html>
