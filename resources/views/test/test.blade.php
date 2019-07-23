<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
    </head>
    <body>
        {{ date('Y/m/d H:i:s.v') }}
    </body>
</html>
