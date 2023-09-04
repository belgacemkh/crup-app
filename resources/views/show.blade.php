<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Show data</title>
    </head>
    <body class="antialiased">
        <input type="text" value="{{ $country->name }}" readonly>
    </body>
</html>