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
        $cultures = Cache::rememberForever("cultures:$id", function() use ($id){
            return Culture::findOrFail($id);
        });
        $comments = Cache::rememberForever("comments:$id", function() use ($id){
            return Comment::findOrFail($id);
        });
        return view('post', ['cultures' => $cultures], ['comments'=>$comments]);
    }
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