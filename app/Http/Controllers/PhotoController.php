<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
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
                   ->where('photos.UserID', '=', Auth::user()->UserID)
                   ->orderBy('photos.fto_created_at', 'desc')
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
        
        return redirect('/admin/foto')->with('success', 'Foto baru telah ditambahkan!');
        
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
        return view('admin.layouts.foto.edit',[
            'photo' => $photo
        ]);
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
        // dd($category);
        $message = [
            'required' => 'Silahkan isi kolom ini!',
        ];
        $validatedData = $request->validate([
            'JudulFoto' => 'required|max:255',
            'DeskripsiFoto'=>'required',
            'TanggalUnggah'=>'required',
            'LokasiFile'=>'required',
            'Album'=>'required',
        ],$message
     );

         $validatedData['abm_updated_by'] = auth()->user()->UserID;

         Album::where('AlbumID', $album->AlbumID)
                ->update($validatedData); 

        return redirect('/admin/album')->with('success', 'Album telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        Photo::destroy($photo->FotoID);
        return redirect('/admin/foto')->with('success','Foto Berhasil Dihapus');
    }

    public function likePhoto(Request $request, $photoId)
{
    $photo = Photo::find($photoId);
    if (!$photo) {
        return response()->json(['success' => false, 'message' => 'Photo not found'], 404);
    }
    
    // Jika permintaan merupakan unlike
    if ($request->isMethod('DELETE')) {
        if ($photo->likes > 0) {
            $photo->likes--;
            $photo->save();
            return response()->json(['success' => true, 'likes' => $photo->likes]);
        } else {
            return response()->json(['success' => false, 'message' => 'Photo is not liked'], 400);
        }
    } else { // Jika permintaan merupakan like
        $photo->likes++;
        $photo->save();
        return response()->json(['success' => true, 'likes' => $photo->likes]);
    }
}

    

}
