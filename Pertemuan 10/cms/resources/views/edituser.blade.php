@extends('layouts.app')

@section('title', 'Edit User- Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
    <h2>Edit Data User</h2>
    <form action="/user/update/{{$users->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$users->id}}"></br>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" required="required" name="name" value="{{$users->name}}"></br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" required="required" name="email" value="{{$users->email}}"></br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" required="required" name="password" value=""></br>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <input type="text" class="form-control" required="required" name="roles" value="{{$users->roles}}"></br>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
    </div>
</main>
@endsection