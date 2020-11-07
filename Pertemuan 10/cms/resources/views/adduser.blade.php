@extends('layouts.app')

@section('title', 'Tambah User - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
    <div class="col-md-10">
    <h2>Tambah Data User</h2>
        <form action="/user/create" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" required="required" name="name"></br>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" required="required" name="email"></br>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" required="required" name="password"></br>
            </div>
            <div class="form-group">
                <label for="roles">Roles</label>
                <input type="text" class="form-control" required="required" name="roles"></br>
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Tambah User</button>
        </form>
    </div>    
    </div>
</main>
@endsection