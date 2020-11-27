@extends('layouts.app')

@section('title', 'Edit User- Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
        <h2>Edit Data User</h2>
        <form action="/user/update/{{$users->id}}" method="post" enctype="multipart/form-data">
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
                <input type="password" class="form-control" name="password"></br>
            </div>
            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" class="form-control" required="required" name="profile_image" value="{{$users->profile_image}}"></br>
                @if(empty($users->profile_image))
                <img width="150px" src="/img/avatar-user.jpg">
                @else
                <img width=" 150px" src="{{asset('storage/'.$users->profile_image)}}">
                @endif
            </div>
            <div class="form-group">
                <label for="roles">Roles</label>
                @if($users->roles == 'Administrator')
                <input type="text" class="form-control" name="roles" value="{{$users->roles}}" disabled>
                @else
                <input type="text" class="form-control" required="required" name="roles" value="{{$users->roles}}"></br>
                @endif
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
        </form>
    </div>
</main>
@endsection