@extends('layouts.app')

@section('content')
{{-- resources/views/songs.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>
    <h1>Songs</h1>
    <ul>
        @foreach ($songs as $song)
            <li>{{ $song->Naam }} by {{ $song->Artiest_Band }}</li>
        @endforeach
    </ul>
</body>
</html>

@endsection