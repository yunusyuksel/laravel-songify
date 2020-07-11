@extends('layouts.app')

@section('content')



<div class="right-content">
    <h3>Just Listened</h3>
    @foreach($albums as $album)
    <a href="/album/{{$album->id}}">
        <div class="album-grid">
            <div class="album-card">
                <img src="/assets/albums{{$album->img_path}}" alt="">
                <p>{{$album->title}}</p>
                <span></span>
            </div>
        </div>
    </a>
    @endforeach


</div>

@endsection