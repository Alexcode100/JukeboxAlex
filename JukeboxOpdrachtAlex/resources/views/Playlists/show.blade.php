@extends('layouts.app')

@section('content')
    <h1>{{ $playlist->PlaylistNaam }}</h1>
    <ul>
        @foreach ($playlist->songs as $song)
            <li>
                {{ $song->Naam }} - {{ $song->Artiest_Band }}
                <form action="{{ route('playlists.songs.delete', ['playlist' => $playlist->id, 'song' => $song->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="delete-song">✖</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
