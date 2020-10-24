@extends('layouts.app')

@section('title', 'Manage - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
<div class="container">
    <h1>Data Artikel</h1>
    <div style="margin-bottom: 10px;">
        <a href="article/add" class="btn btn-primary">Tambah Data</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cultures as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->created_at}}</td>
                    <td>
                    <a href="article/edit/{{ $a->id }}" class="badge badge-info">Edit</a>
                    <a href="article/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</main>
@endsection