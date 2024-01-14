@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>
    @include('layouts.navbar')
    <h1>Songs</h1>
    <ul>
        @foreach ($songs as $song)
            <li>
                {{ $song->Naam }} door {{ $song->Artiest_Band }}
                <button onclick="showInfo('song-info-{{ $song->id }}')">Toon Info</button>
                <div id="song-info-{{ $song->id }}" style="display:none;">
                    Duur: {{ $song->Duur }} seconden
                </div>
            </li>
        @endforeach
    </ul>

    <script>

        //knopje showen of niet showen wanneer je erop clickt
        function showInfo(id) {
            var info = document.getElementById(id);
            if (info.style.display === "none") {
                info.style.display = "block";
            } else {
                info.style.display = "none";
            }
        }
    </script>

</body>
</html>

@endsection
