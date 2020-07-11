@extends('layouts.app')


@section('content')
<div class="information-content">
    <div class="img-section">
        <img src="/assets/albums{{$album->img_path}}" width="256px" height="256px" alt="">
        <div class="info-section">
            <h3>{{$album->title}}</h3>
            <span style="color:white">
                {{$artist->name}}
            </span> <br> <br>
            <span style="color:grey">
                {{count($songs)}} Songs
            </span>


        </div>
    </div>

    <div class="playlist">
        <ul class="song-list">

            @foreach ($songs as $song)
            <li class="song-item">
                <div class="song-count">
                    <span>{{$i++}}</span>
                </div>
                <div class="play-btn-div">
                    <button class="play-btn" onclick="playSong({{$i-2}},{{$songs}},true)">
                        <img src="/assets/images/icons/play-white.png" alt="" width="12px" height="12px">
                    </button>
                </div>

                <div class="song-description">
                    <span>{{$song->title}}</span>
                </div>
                <div class="song-duration">
                    <span>{{$song->duration}}</span>
                </div>
            </li>
            @endforeach
        </ul>



    </div>



</div>(


@endsection


@section('bar-info')
<div class="info-bar">
    <img id="album-img-info" src="/assets/albums{{$album->img_path}}" alt="asdsadsa" width="56px" height="56px">
    <div class="song-info">
        <span id="song-name-info"></span> <br>
        <span id="artist-name-info">{{$artist->name}}</span>
    </div>

</div>
@endsection