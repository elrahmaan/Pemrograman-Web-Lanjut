<?php

namespace App\Http\Controllers;

use App\Culture;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PDF;

class ManageController extends Controller
{
    public function index()
    {
        $cultures = Culture::all();
        $users = User::all();
        return view('manage', ['cultures' => $cultures, 'users' => $users]);
    }
    public function add()
    {
        return view('addarticle');
    }

    public function create(Request $request)
    {
        if ($request->file('featured_image')) {
            $image_name = $request->file('featured_image')->store('/images', 'public');
        }
        Culture::create([
            'intro' => $request->intro,
            'title' => $request->title,
            'featured_image' => $image_name,
            'paragraph1' => $request->paragraph1,
            'paragraph2' => $request->paragraph2,
            'category' => $request->category,
            'user_id' => $request->user_id
        ]);
        return redirect('/manage')->with('success', 'Data berhasil ditambahkan');
    }
    public function show($id)
    {
        $cultures = Culture::find($id);
        $users = User::all();
        return view('showarticle', ['cultures' => $cultures, 'users' => $users]);
    }

    public function edit($id)
    {
        $cultures = Culture::find($id);
        $users = User::all();
        return view('editarticle', ['cultures' => $cultures, 'users' => $users]);
    }
    public function update($id, Request $request)
    {
        $cultures = Culture::find($id);
        $cultures->intro = $request->intro;
        $cultures->title = $request->title;
        if ($cultures->featured_image && file_exists(storage_path('app/public/' . $cultures->featured_image))) {
            \Storage::delete('public' . $cultures->featured_image);
        }
        $image_name = $request->file('featured_image')->store('images', 'public');
        $cultures->featured_image = $image_name;
        $cultures->paragraph1 = $request->paragraph1;
        $cultures->paragraph2 = $request->paragraph2;
        $cultures->category = $request->category;
        $cultures->user_id = $request->user_id;
        $cultures->save();
        return redirect('/manage')->with('success', 'Data berhasil diubah');
    }
    public function delete($id)
    {
        $cultures = Culture::find($id);
        $cultures->delete();
        return redirect('/manage')->with('danger', 'Data telah dihapus');
    }

    public function cetak_pdf()
    {
        $cultures = Culture::all();
        $users = User::all();
        $pdf = PDF::loadview('articles_pdf', ['cultures' => $cultures, 'users' => $users]);
        return $pdf->stream();
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
}
