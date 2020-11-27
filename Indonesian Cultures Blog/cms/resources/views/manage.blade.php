@extends('layouts.app')

@section('title', 'Manage Articles- Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
        <h1>Data Artikel</h1>
        <div style="margin-bottom: 10px;">
            <a href="article/add" class="btn btn-primary">Tambah Data</a>
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
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Tanggal</th>
                    <th style="width: 150px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $nomor = 1; @endphp
                @foreach($cultures as $a)
                @foreach ($users as $user)
                @if($a->user_id == $user->id)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$a->getUpdatedAtAtribute()}}</td>
                    <td align="center">
                        <a href="article/show/{{$a->id}}" class="badge badge-info">Lihat</a>
                        <a href="article/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
                        <a href="article/delete/{{ $a->id }}" class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endif
                @endforeach
                @endforeach
            </tbody>
        </table>
        <div align="right">
            <a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF <i class="fa fa-print fa-xs" aria-hidden="true"></i></a>
        </div>
    </div>
</main>
@endsection