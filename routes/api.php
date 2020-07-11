<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('songs','song\SongController@index');

Route::get('songs/{songid}','song\SongController@show');

Route::get('albums','AlbumApiController@index');
Route::get('albums/{albumId}','AlbumApiController@show');

Route::get('artists','artists\ArtistController@index');
Route::get('artists/{artistId}','artists\ArtistController@show');


