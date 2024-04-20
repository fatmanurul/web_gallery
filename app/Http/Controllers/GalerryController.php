<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;

class GalerryController extends Controller
{
    public function index(){
        $photo = Photo::join('newalbums', 'newalbums.AlbumID', '=', 'photos.AlbumID')
        ->orderBy('photos.fto_created_at', 'desc')
        ->get();
        // dd($photo);
        return view('main.photos.index',compact('photo'));
    }

//     public function detail($id)
// {
//     $photos = Photo::where('AlbumID', $id)->get();

//     return view('main.land.detailAlbum',compact(['photos']));
// }


    public function detail($id)
{
    $we = Photo::join('newalbums', 'newalbums.AlbumID', '=', 'photos.AlbumID')
    ->where('FotoID', $id)
    ->get();

    return view('main.photos.detailPhoto',compact(['we']));
}
    // public function photos(){
    //     $album = Album::all(); 
        
    //     return view('main.land.photos',compact('album'));
    // }
    public function admin(){
        return view('admin.layouts.dashboard.index');
    }
    public function foto(){
        return view('admin.layouts.foto.index');
    }
    public function create(){
        return view('admin.layouts.foto.create');
    }
    public function kategori(){
        return view('admin.kategori.index');
    }
    public function creates(){
        return view('admin.kategori.create');
    }

    public function profile(){
        return view('admin.profile');
    }
    
}
