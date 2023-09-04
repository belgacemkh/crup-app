<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 10 crud example</title>
    </head>
    <body class="antialiased">
        <p>{{ session()->get('success') ?: '' }}</p>
        <a href="{{ route('country.create') }}">Create New</a>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @forelse ($countries as $country)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $country->name }}</td>
                <td><a href="{{ route('country.edit',$country->id) }}">Edit</a></td>
                <td><a href="{{ route('country.show',$country->id) }}">Show</a></td>
                <td>
                    <form method="POST" action="{{ route('country.destroy',$country->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <p>No country found!</p>
            @endforelse
        </table>
    </body>
</html>