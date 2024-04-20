<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photo;

class VisitorAlbumController extends Controller
{
    public function album(Request $request){
        // dd($request);
        $album = Album::all();
        $photo = Photo::join('newalbums','newalbums.AlbumID', 'photos.AlbumID')
            ->where('photos.AlbumID')
            ->orderBy('abm_created_at', 'desc')
            ->get();
        $Album_now = Album::where('AlbumID')->first();
        return view ('main.land.photos', [
            'album'=>$album,
            // 'album_id'=>$id,
            'album_name'=>$Album_now,
            'photo' => $photo
        ]);
    }

    public function showPhotos($id)
{
    $photos = Photo::where('AlbumID', $id)->get();
    $album = Album::findOrFail($id);

    return view('album.photos', [
        'photos' => $photos,
        'album' => $album
    ]);
}
public function detail($id)
{
    $photos = Photo::where('AlbumID', $id)->get();

    return view('main.land.detailAlbum',compact(['photos']));
}

    
}
