<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class GalleryController extends Controller
{

    public function gallery()
    {
        $cultures = Cache::rememberForever('cultures', function(){
            return Culture::all();
        });
        return view('gallery',['cultures'=> $cultures]);
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