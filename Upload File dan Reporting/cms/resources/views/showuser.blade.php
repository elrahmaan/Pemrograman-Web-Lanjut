@extends('layouts.app')

@section('title', 'Show User - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
<div class="container">
    <h1>Detail User</h1>
    <table class="table table-bordered table-striped">
        <tbody align="justify">
            <tr>
                <td><b>1</b></td>
                <td><b>Name</b></td>
            </tr>
            <tr>
                <td></td>
                <td>{{$users->name}}</td>
            </tr>
            
            <tr>
                <td><b>2</b></td>
                <td><b>Email</b></td>
            </tr>
            <tr>
                <td></td>
                <td>{{$users->email}}</td>
            </tr>

            <tr>
                <td><b>3</b></td>
                <td><b>Role</b></td>
            </tr>
            <tr>
                <td></td>
                <td>{{$users->roles}}</td>
            </tr>

            <tr>
                <td><b>4</b></td>
                <td><b>Created At</b></td>
            </tr>
            <tr>
                <td></td>
                <td>{{$users->created_at}}</td>
            </tr>

            <tr>
                <td><b>5</b></td>
                <td><b>Updated At</b></td>
            </tr>
            <tr>
                <td></td>
                <td>{{$users->updated_at}}</td>
            </tr>
            
        </tbody>
    </table>
    <div align="right">
        <a href="/manageUsers" class="btn btn-primary">Kembali</a>
    </div>
    </div>
</main>
@endsection