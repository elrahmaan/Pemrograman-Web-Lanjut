<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{
    public function home(){
        return view('kuis1.home');
    }
}
