<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::join('newalbums', 'newalbums.AlbumID', '=', 'photos.AlbumID')
                   ->get();
                //    dd($photo);

        return view('admin.layouts.foto.index', compact('photo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $Album = Album::all(); // Ambil semua data album dari tabel album
    return view('admin.layouts.foto.create', compact('Album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $messages = [
            'required' => 'Silahkan isi kolom ini!',
            'max' => 'Tidak boleh lebih dari 100 karakter!',
            'image' => 'Anda hanya dapat mengunggah gambar!'
        ];
        
        $request->validate([
            'JudulFoto' => [
                'required',
                'max:100',
            ],
            'AlbumID' => 'required',
            'DeskripsiFoto' => 'required',
            'LokasiFile' => 'required|image',
            'TanggalUnggah' => 'required'
        ], $messages);
        // dd($request);
        $photo = new Photo;
        $photo->JudulFoto = $request->JudulFoto;
        $photo->AlbumID = $request->AlbumID;
        $photo->DeskripsiFoto = $request->DeskripsiFoto;
        $photo->TanggalUnggah = $request->TanggalUnggah;
        $photo->LokasiFile = $request->LokasiFile;
        $photo['UserID'] = auth()->user()->UserID;
        
        if ($request->hasFile('LokasiFile')) {
    $files = $request->file('LokasiFile');
    $path = storage_path('app/public/images/photo-images');
    $files_name =  date('Ymd') . '_' . $files->getClientOriginalName();
    $files->storeAs('images/photo-images', $files_name);
    $photo->LokasiFile = $files_name;
}
        
        $photo->save();
        
        return redirect('/admin/foto')->with('success', 'Photo baru telah ditambahkan!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
