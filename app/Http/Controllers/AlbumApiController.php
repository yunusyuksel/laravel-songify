<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Album;

class AlbumApiController extends Controller
{
    public function index()
    {
        $album = Album::all();

        return response()->json($album,200);
    }

    public function show($id)
    {
        $album = Album::find($id);
        if(empty($album)){
            return response()->json("Not Found,404",404);
        }
        return response()->json($album,200);
    }
}
