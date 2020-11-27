<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class GalleryController extends Controller
{

    // public function gallery()
    // {
    //     $cultures = Cache::rememberForever('cultures', function(){
    //         return Culture::all();
    //     });
    //     return view('gallery',['cultures'=> $cultures]);

    // }
    public function gallery()
    {
        $cultures = Culture::all();
        return view('gallery', ['cultures' => $cultures]);
    }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Gate::allows('user-display')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
}

    /*-------------------- KUIS 1  ----------------------------
    //TANPA CACHE
    public function gallery()
    {
        $cultures = Culture::all();
        return view('kuis1.gallery',['cultures'=> $cultures]);
    }


    public function gallery()
    {
        $cultures = Cache::rememberForever('cultures', function(){
            return Culture::all();
        });
        return view('kuis1.gallery',['cultures'=> $cultures]);
    }
    -----------------------------------------------------------*/