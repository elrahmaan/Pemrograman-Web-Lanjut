<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{

    public function post($id)
    {
        $cultures = Culture::find($id);
        $comments = Comment::all();
        $users = User::all();
        return view('post', ['cultures' => $cultures, 'comments' => $comments, 'users' => $users]);
    }


    public function createComment(Request $request)
    {
        Comment::create([
            // 'commenter' => $request->commenter,
            'comment_text' => $request->comment_text,
            // 'commenter_image' => $request->commenter_image,
            'user_id' => $request->user_id,
            'culture_id' => $request->culture_id
        ]);
        return redirect()->back();
    }

    public function deleteComment($id)
    {
        $comments = Comment::find($id);
        $comments->delete();
        return redirect()->back();
    }
    public function updateComment($id, Request $request)
    {
        $comments = Comment::find($id);
        // $comments->commenter = $request->commenter;
        // $comments->commenter_image = $request->commenter_image;
        // $comments->user_id = $request->user_id;
        $comments->comment_text = $request->comment_text;
        $comments->save();
        return redirect()->back();
    }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Gate::allows('user-display')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    // -----Menggunakan Cache-----
    // public function post($id)
    // {
    //     $cultures = Cache::rememberForever("cultures:$id", function() use ($id){
    //         return Culture::findOrFail($id);
    //     });
    //     $comments = Cache::rememberForever("comments", function(){
    //         return Comment::All();
    //     });
    //     return view('post', ['cultures' => $cultures], ['comments'=>$comments]);
    // }






}
    /*------------------------------ KUIS 1  ---------------------------------
    //TANPA CACHE
    public function post($id)
    {
        $cultures = Culture::find($id);
        $comments = Comment::find($id);
        return view('kuis1.post', ['cultures'=>$cultures],['comments'=>$comments]);
    }

    public function post($id)
    {
        $cultures = Cache::rememberForever("cultures:$id", function() use ($id){
            return Culture::findOrFail($id);
        });
        $comments = Cache::rememberForever("comments:$id", function() use ($id){
            return Comment::findOrFail($id);
        });
        return view('kuis1.post', ['cultures' => $cultures], ['comments'=>$comments]);
    }
    -------------------------------------------------------------------*/