@extends('layouts.app')

@section('content')
{{-- resources/views/genres.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
</head>
<body>
    <h1>Muziek Genres</h1>
    <ul>
        @foreach ($genres as $genre)
            <li><a href="{{ route('genres.songs', $genre->id) }}">{{ $genre->Genre }}</a></li>
        @endforeach
    </ul>
</body>
</html>

@endsection