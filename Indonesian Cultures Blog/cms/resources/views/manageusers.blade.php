@extends('layouts.app')

@section('title', 'Manage Users- Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
        <h1>Data User</h1>
        <div style="margin-bottom: 10px;">
            <a href="user/add" class="btn btn-primary">Tambah Data</a>
        </div>
        @if(session('success'))
        <div class="alert alert-success" align="center">
            {{session('success')}}
        </div>
        @elseif(session('danger'))
        <div class="alert alert-danger" align="center">
            {{session('danger')}}
        </div>
        @endif
        <table class="table table-bordered table-striped">
            <thead>
                <tr align="center">
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>ID User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $nomor = 1; @endphp
                @foreach($users as $user)
                <tr>
                    <td align="center">{{$nomor++}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td align="center">{{$user->id}}</td>
                    <td align="center">

                        <a href="user/show/{{$user->id}}" class="badge badge-info">Lihat</a>
                        <a href="user/edit/{{ $user->id }}" class="badge badge-warning">Edit</a>
                        <a href="user/delete/{{ $user->id }}" class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Hapus</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div align="right">
            <a href="/user/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF <i class="fa fa-print fa-xs" aria-hidden="true"></i></a>
        </div>
    </div>
</main>
@endsection