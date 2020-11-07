@extends('layouts.app')

@section('title', 'Manage - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
<div class="container">
    <h1>Data User</h1>
    <div style="margin-bottom: 10px;">
        <a href="user/add" class="btn btn-primary">Tambah Data</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $nomor=1; ?>
            @foreach($users as $user)
                <tr>
                    <td><?php echo $nomor ?></td>
                        <?php $nomor++; ?>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                    
                    <a href="user/edit/{{ $user->id }}" class="badge badge-info">Edit</a>
                    <a href="user/delete/{{ $user->id }}" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</main>
@endsection