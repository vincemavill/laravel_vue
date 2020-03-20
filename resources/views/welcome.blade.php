<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>Laravel</title>
    </head>
    <body>
            <div id="app">
                <!-- <welcome></welcome> -->
                <welcome :title="'{{$title}}'"></welcome>
            </div>
            <script type="text/javascript" src="js/app.js"></script>
        </body>
</html>
