<?php

namespace App\Http\Controllers;
use App\Culture;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        $cultures = Culture::all();
        return view('manage',['cultures' => $cultures]);
    }
    public function add()
    {
        return view('addarticle');
    }

    public function create(Request $request)
    {   
        Culture::create([
            'intro' => $request->intro,
            'title' => $request->title,
            'featured_image' => $request->featured_image,
            'paragraph1' => $request->paragraph1,
            'paragraph2' => $request->paragraph2,
            'category' => $request->category,
            'publish_at' => $request->publish_at,
            'author' => $request->author
        ]);
        return redirect('/manage');
    }

    public function edit($id)
    {
        $cultures = Culture::find($id);
        return view('editarticle',['cultures'=>$cultures]);
    }
    public function update($id, Request $request)
    {
        $cultures = Culture::find($id);
        $cultures->intro = $request->intro;
        $cultures->title = $request->title;
        $cultures->featured_image = $request->featured_image;
        $cultures->paragraph1 = $request->paragraph1;
        $cultures->paragraph2 = $request->paragraph2;
        $cultures->category = $request->category;
        $cultures->publish_at = $request->publish_at;
        $cultures->author = $request->author;
        $cultures->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $cultures = Culture::find($id);
        $cultures->delete();
        return redirect('/manage');
    }
}
