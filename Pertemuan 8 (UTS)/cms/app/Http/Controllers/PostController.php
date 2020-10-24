<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class PostController extends Controller
{
    
    public function post($id)
    {
        $cultures = Culture::find($id);
        $comments = Comment::all();
        return view('post', ['cultures'=>$cultures],['comments'=>$comments]);
    }
    public function createComment(Request $request, $id)
    {   
        Comment::create([
            'commenter' => $request->commenter,
            'comment_text' => $request->comment_text,
            'comment_time' => $request->comment_time,
            'article_id' => $request->article_id
        ]);
        return redirect()->action('PostController@post',['id' => $id]);
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