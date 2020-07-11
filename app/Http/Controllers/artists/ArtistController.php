<?php

namespace App\Http\Controllers\artists;

use Illuminate\Http\Request;
use App\Artist;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();

        return response()->json($artists,200);
    }

    public function show($id)
    {
        $artist= Artist::find($id);

        return response()->json($artist,200);
    }
}
