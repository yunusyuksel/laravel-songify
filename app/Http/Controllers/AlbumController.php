<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Song;
use App\Album;
use App\Artist;

class AlbumController extends Controller
{
    
    public function show(Album $album)
    {
        
        $data=[
            "album"=> $album,
            "artist"=> Artist::find($album->artist),
            "songs"=> Song::where('album',$album->id)->get(),
            "i" => 1
        
        
        ];

        
        
        
        return view('album.show')->with($data);

        

        
    }

    
    
}
