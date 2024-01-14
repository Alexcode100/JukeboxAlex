@extends('layouts.app')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('content')
{{-- resources/views/genres.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
</head>
<body>
    @include('layouts.navbar')
    <h1>Muziek Genres</h1>
    <ul>
        @foreach ($genres as $genre)
            <li><a href="{{ route('genres.songs', $genre->id) }}">{{ $genre->Genre }}</a></li>
        @endforeach
    </ul>
</body>
</html>

@endsection