<?php

namespace App\Http\Controllers\song;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Song;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        $count = request('count');
        $album = request('album');
        
        if($album != null)
        {
            $songs = $count==null? DB::table('songs')->where('album',$album)->get(): DB::table('songs')->where('album',$album)->paginate(1);
        }
        

        
        return response()->json($songs,200);
        

        
        
    }

    public function show($id)
    {
        $song = Song::find($id);
        
        return response()->json($song,200);
    }
}
