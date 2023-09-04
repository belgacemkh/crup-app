<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create data</title>
    </head>
    <body class="antialiased">
        <form action="{{ route('country.store') }}" method="post">
          @csrf
          <input type="text" placeholder="name" name="name">
          <button type="submit">submit</button>
        </form>
    </body>
</html>