<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use App\Models\User;
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
    public function edit(int $photoId)
    {
        $photo = Photo::where('FotoID', $photoId)->first();
        $user = User::all();
        $album = Album::get();
        
        // Periksa jika photo ditemukan
        if (!$photo) {
            abort(404); // Tampilkan halaman 404 jika photo tidak ditemukan
        }
    
        return view('admin.layouts.foto.edit', compact(['photo','album', 'user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $photoId)
{
    
    // Temukan foto berdasarkan photoId
    $photo = Photo::where('FotoID', $photoId)->first();
    
    // Perbarui atribut foto dengan data dari request
    $photo->JudulFoto = $request->JudulFoto;
    $photo->DeskripsiFoto = $request->DeskripsiFoto;
    $photo->AlbumID = $request->AlbumID;
    $photo->TanggalUnggah = $request->TanggalUnggah;
    
    // Periksa jika file_location ada dalam request
    if ($request->hasFile('LokasiFile')) {
        $file = $request->file('LokasiFile');
        $path = storage_path('app/public/images/photo-images');
        $file_name =  date('Ymd') . '_' . $file->getClientOriginalName();
        $file->storeAs('images/photo-images', $file_name);
        $photo->LokasiFile = $file_name;
    }

    // Tidak perlu memperbarui tanggal pembuatan
    // Perbarui atribut 'userId' dengan ID pengguna yang sedang masuk
    $photo->UserID = auth()->user()->UserID;

    // Simpan perubahan pada foto
    $photo->save();

    // Redirect ke halaman foto-data dengan pesan sukses
    return redirect('/admin/foto')->with('success', 'Photo telah diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */


     public function destroy($FotoID)
    {
        Photo::destroy($FotoID);
        return redirect('/admin/foto')->with('success','Foto Berhasil Dihapus');
    }
    // public function destroy(Photo $photo)
    // {
    //     $destroy=Photo::where('FotoID', $photo>FotoID)->first();
    //     $destroy->destroy() ;
    //     return redirect('/admin/foto')->with('success','Foto Berhasil Dihapus');
    // }

//     public function likePhoto(Request $request, $photoId)
// {
//     $photo = Photo::find($photoId);
//     if (!$photo) {
//         return response()->json(['success' => false, 'message' => 'Photo not found'], 404);
//     }
    
//     // Jika permintaan merupakan unlike
//     if ($request->isMethod('DELETE')) {
//         if ($photo->likes > 0) {
//             $photo->likes--;
//             $photo->save();
//             return response()->json(['success' => true, 'likes' => $photo->likes]);
//         } else {
//             return response()->json(['success' => false, 'message' => 'Photo is not liked'], 400);
//         }
//     } else { // Jika permintaan merupakan like
//         $photo->likes++;
//         $photo->save();
//         return response()->json(['success' => true, 'likes' => $photo->likes]);
//     }
// }

    

}
