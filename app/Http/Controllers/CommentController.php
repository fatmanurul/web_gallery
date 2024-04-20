<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Photo;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class CommentController extends Controller
{
    public function index(Comment $comment)
    {
        $comments = Comment::join('photos','photos.FotoID', 'comments.FotoID')
                            ->orderBy('comments.cmn_created_at', 'desc') 
                            ->get();
                            
        return view('admin.comments.index',[
        'comments' => $comments
        ]);

    }
  
    public function store(Request $request, $FotoID)
    {

        $messages = [
            'required' => 'Silahkan isi kolom ini!',
            'email' => 'Email tidak valid!'
        ];

        $request->validate([
            'cmn_comment' => 'required|max:600',
            'cmn_name' => 'required|max:255',
            'cmn_email' => 'required|email',
        ], $messages);

        $FotoID = Photo::where('FotoID', $FotoID)->first();
        
        $comments = new Comment;
        //  dd($findArticle);
        $comments-> FotoID = $FotoID->FotoID; 
        $comments-> cmn_name = $request->cmn_name;
        $comments-> cmn_email = $request->cmn_email;
        $comments-> cmn_comment = $request->cmn_comment;

        $comments->save();

        return redirect('/foto/' .$FotoID)->with('success', 'Komen telah diperbarui!');
    }
}
