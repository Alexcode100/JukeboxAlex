<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function add(Request $request)
    {
        $playlist = new Playlist();
        $playlist->PlaylistNaam = $request->input('PlaylistNaam');
        $playlist->save();
        return redirect('/playlists');
    }

    public function showAddForm()
    {
        return view('Playlists.playlists', [
            'playlists' => Playlist::all(),
            'songs' => Song::all()
        ]);
    }


    public function update(Request $request, $playlistId)
    {
        $playlist = Playlist::findOrFail($playlistId);
        $songs = $request->songs;

        $playlist->songs()->sync($songs);

        return back()->with('success', 'Playlist bijgewerkt!');
    }

    public function addSongsToPlaylist(Request $request)
    {
        $playlistId = $request->input('playlist_id');
        $songs = $request->input('songs');

        $playlist = Playlist::find($playlistId);
        $playlist->songs()->syncWithoutDetaching($songs);

        return back()->with('success', 'Nummers toegevoegd aan playlist!');
    }

    public function show($id)
    {
        $playlist = Playlist::with('songs')->findOrFail($id);
        $totalDuration = $playlist->songs->sum('Duur');

        return view('playlists.show', compact('playlist', 'totalDuration'));
    }



    public function deleteSongFromPlaylist(Request $request, $playlistId, $songId)
    {
        $playlist = Playlist::findOrFail($playlistId);
        $playlist->songs()->detach($songId);

        return back()->with('success', 'Song removed from playlist.');
    }
};
