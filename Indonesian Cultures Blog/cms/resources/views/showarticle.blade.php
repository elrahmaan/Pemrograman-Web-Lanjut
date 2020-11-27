@extends('layouts.app')

@section('title', 'Show Article - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
        <h1>Detail Artikel</h1>
        <div align="center">
            <img src="{{'/storage/'.$cultures->featured_image}}" width="500px;" height="250px;">
        </div>
        <br>
        @foreach ($users as $user)
        @if($cultures->user_id == $user->id)
        <table class="table table-bordered table-striped">
            <tbody align="justify">
                <tr>
                    <td><b>1</b></td>
                    <td><b>Judul</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$cultures->title}}</td>
                </tr>

                <tr>
                    <td><b>2</b></td>
                    <td><b>Kategori</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$cultures->category}}</td>
                </tr>

                <tr>
                    <td><b>3</b></td>
                    <td><b>Author</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$user->name}}</td>
                </tr>

                <tr>
                    <td><b>4</b></td>
                    <td><b>Paragraf Intro</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$cultures->intro}}</td>
                </tr>

                <tr>
                    <td><b>5</b></td>
                    <td><b>Konten Paragraf 1</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$cultures->paragraph1}}</td>
                </tr>

                <tr>
                    <td><b>6</b></td>
                    <td><b>Konten Paragraf 2</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$cultures->paragraph2}}</td>
                </tr>

                <tr>
                    <td><b>7</b></td>
                    <td><b>Tanggal Publikasi</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$cultures->getUpdatedAtAtribute()}}</td>
                </tr>

            </tbody>
        </table>
        @endif
        @endforeach
        <div align="right">
            <a href="/manage" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</main>
@endsection