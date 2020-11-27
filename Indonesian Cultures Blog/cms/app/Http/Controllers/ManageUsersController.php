<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use PDF;

class ManageUsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('manageusers',['users' => $users]);
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('showuser',['users' => $users]);
    }

    public function add()
    {
        return view('adduser');
    }

    public function create(Request $request)
    {   
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
        ]);
        return redirect('/manageUsers')->with('success','Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('edituser',['users'=>$users]);
    }
    public function update($id, Request $request)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        if($users->profile_image && file_exists(storage_path('app/public/' . $users->profile_image)))
        {
            \Storage::delete('public' . $users->profile_image);
        }
        $image_name = $request->file('profile_image')->store('images', 'public');
        $users->profile_image = $image_name;
        $users->roles = $request->roles;
        $users->save();
        return redirect('/manageUsers')->with('success','Data berhasil diubah');
    }
    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/manageUsers')->with('danger','Data telah dihapus');;
    }
    public function cetak_pdf(){
        $users = User::all();
        $pdf = PDF::loadview('users_pdf',compact('users'));
        return $pdf->stream();
        // $users = User::all();
        // return view('users_pdf',['users' => $users]);
    }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
}