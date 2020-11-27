<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class BlogController extends Controller
{
    public function blog()
    {
        $cultures = Culture::latest()->paginate(4);
        $comments = Comment::all();
        $user = User::all();
        return view('blog', ['cultures' => $cultures, 'comments' => $comments, 'users' => $user]);
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $users = User::all();
        $result = DB::table('cultures')
            ->where('title', 'like', '%' . $search . '%')
            ->paginate();
        return view('blog', ['cultures' => $result, 'users' => $users]);
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
    // public function blog()
    // {   
    //     $cultures = Cache::rememberForever('cultures', function(){
    //         return Culture::all();
    //     });
    //     return view('blog',['cultures'=> $cultures]);
    // }
}

    /*------------------------ KUIS 1 -----------------------
    //TANPA CACHE
    public function blog()
    {
        $cultures = Culture::all();
        return view('kuis1.blog',['cultures'=> $cultures]);
    }

    public function blog()
    {
        $cultures = Cache::rememberForever('cultures', function(){
            return Culture::all();
        });
        return view('kuis1.blog',['cultures'=> $cultures]);
    }


    ----------------------------------------------------------*/