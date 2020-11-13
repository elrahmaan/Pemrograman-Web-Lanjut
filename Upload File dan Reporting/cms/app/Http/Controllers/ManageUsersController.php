<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

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
        return redirect('/manageUsers');
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
        $users->roles = $request->roles;
        $users->save();
        return redirect('/manageUsers');
    }
    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/manageUsers');
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