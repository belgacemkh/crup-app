<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Edit data</title>
    </head>
    <body class="antialiased">
        <form action="{{ route('country.update',$country->id) }}" method="post">
          @csrf
          @method('patch')
          <input type="text" placeholder="name" name="name" value="{{ $country->name }}">
          <button type="submit">update</button>
        </form>
    </body>
</html>