@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
</head>
<body>
    @include('layouts.navbar')

    <h1 style="margin-left:50px;">Playlist</h1>
    <form style="margin-left:50px;"  action="/add-playlist" method="POST">
        @csrf
        <input type="text" name="PlaylistNaam" placeholder="Voer playlist naam in">
        <button type="submit">Voeg toe</button>
    </form>

    @foreach ($playlists as $Naam)
        <div style="margin-left:50px;">
            <a style="display:inline-block;" href="{{ route('playlists.show', $Naam->id) }}">
                {{ $Naam->PlaylistNaam }}
            </a>
            - Totale duur: <span style="font-weight: bold;">{{ $Naam->songs->sum('Duur') }}</span> seconden
        </div>
    @endforeach





    <h2  style="margin-top:50px;">Voeg Nummers toe aan een Playlist</h2>

    <form action="{{ url('/add-songs-to-playlist') }}" method="POST">
        @csrf


        <select name="playlist_id">
            @foreach ($playlists as $playlist)
                <option value="{{ $playlist->id }}">{{ $playlist->PlaylistNaam }}</option>
            @endforeach
        </select>

        <select name="songs[]" multiple>
            @foreach ($songs as $song)
                <option value="{{ $song->id }}">{{ $song->Naam }}</option>
            @endforeach
        </select>

        <button style="margin-left:50px;" type="submit">Voeg nummers toe aan Playlist</button>
    </form>
</body>
</html>

@endsection
