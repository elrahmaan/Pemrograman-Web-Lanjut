@extends('layouts.app')

@section('title', 'Show User - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
        <h1>Detail User</h1>
        <div align="center">
            <img src="{{'/storage/'.$users->profile_image}}" width="220px;" height="250px;">
        </div>
        <br>
        <table class="table table-bordered table-striped">
            <tbody align="justify">
                <tr>
                    <td><b>1</b></td>
                    <td><b>ID User</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$users->id}}</td>
                </tr>
                <tr>
                    <td><b>2</b></td>
                    <td><b>Name</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$users->name}}</td>
                </tr>

                <tr>
                    <td><b>3</b></td>
                    <td><b>Email</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$users->email}}</td>
                </tr>

                <tr>
                    <td><b>4</b></td>
                    <td><b>Role</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$users->roles}}</td>
                </tr>

                <tr>
                    <td><b>5</b></td>
                    <td><b>Dibuat pada</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$users->getCreatedAtAtribute()}}</td>
                </tr>

                <tr>
                    <td><b>6</b></td>
                    <td><b>Terakhir Diubah</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$users->getUpdatedAtAtribute()}}</td>
                </tr>

            </tbody>
        </table>
        <div align="right">
            <a href="/manageUsers" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</main>
@endsection