@extends('layouts.app')

@section('title', 'Tambah Data - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
    <div class="col-md-10">
    <h2>Tambah Data Artikel</h2>
        <form action="/article/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="intro">Intro</label>
                <textarea class="form-control" required="required" name="intro"></textarea><br>
            </div>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" required="required" name="title"></br>
            </div>
            <div class="form-group">
                <label for="featured_image">Feature Image</label>
                <input type="file" class="form-control" required="required" name="featured_image"></br>
            </div>
            <div class="form-group">
                <label for="paragraph1">Paragraph 1</label>
                <textarea class="form-control" required="required" name="paragraph1"></textarea><br>
            </div>
            <div class="form-group">
                <label for="paragraph2">Paragraph 2</label>
                <textarea class="form-control" required="required" name="paragraph2"></textarea><br>
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <input type="text" class="form-control" required="required" name="category"></br>
            </div>
            <div class="form-group">
                <label for="publish_at">Dipublikasikan pada</label>
                <input type="text" class="form-control" required="required" name="publish_at"></br>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" required="required" name="author"></br>
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
        </form>
    </div>    
    </div>
</main>
@endsection