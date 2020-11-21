@extends('layouts.app')

@section('title', 'ARS News - Portal Berita Terupdate')

@section('content')
<div class="container">
    <div class="row">
        <main class="posts-listing col-lg-8">
            <div class="container">
                <a>
                    <h3 class="h1">Daftar Artikel</h3>
                </a>
                <div class="row">

                    <!-- post -->
                    @foreach($artikel as $a)
                    <div class="post col-xl-6">
                        <div style="border: 1px solid #eee;" class="post-thumbnail"><img src="{{$a->urlToImage}}" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date meta-last">{{$a->publishedAt}}</div>
                                <div class="category"><a>Sumber: {{$a->source->name}}</a></div>
                            </div>
                            <a href="{{$a->url}}" target="_blank">
                                <h3 class="h4">{{$a->title}}</h3>
                            </a>
                            <p class="text-muted">{{Str::limit($a->description, 150, '...')}}. 
                                <a href="{{$a->url}}" class="text-dark" target="_blank">Lebih Detail</a></p>
                                <a href="{{$a->url}}" style="font-size: 12px;" target="_blank">URL : {{$a->url}}</a>
                            <footer class="post-footer d-flex align-items-center"><a href="#"
                                    class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStt8Ue2ZBqbY1HGhCxwV_G6bh5-E3-ggkXAQ&usqp=CAU"
                                            alt="..." class="img-fluid"></div>
                                    <div class="title"><span>{{$a->author}}</span></div>
                                </a>
                                <div class="date">{{$a->publishedAt}}</div>
                                <div class="comments meta-last">1 comments</div>
                            </footer>
                        </div>
                        <hr style="border: 1px solid #eee;">
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-template d-flex justify-content-center">
                        <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a href="#" class="page-link active">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </main>
        <aside class="col-lg-4">
            <!-- Widget [Search Bar Widget]-->
            <div class="widget search">
                <header>
                    <h3 class="h6">Search the blog</h3>
                </header>
                <form action="/search" class="search-form">
                    <div class="form-group">
                        <input class="form-control mr" type="search" placeholder="Search" name="keyword">
                        <br>
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Go</button>
                    </div>
                </form>
            </div>
            <!-- Widget [Categories Widget]-->
            <div class="widget categories">
                <header>
                    <h3 class="h6">Categories</h3>
                </header>
                <div class="item d-flex justify-content-between"><a href="#">Bisnis</a></div>
                <div class="item d-flex justify-content-between"><a href="#">Hiburan</a></div>
                <div class="item d-flex justify-content-between"><a href="#">Kesehatan</a></div>
                <div class="item d-flex justify-content-between"><a href="#">Pengetahuan</a></div>
                <div class="item d-flex justify-content-between"><a href="#">Olahraga</a></div>
                <div class="item d-flex justify-content-between"><a href="#">Teknologi</a></div>
            </div>
            <!-- Widget [Tags Cloud Widget]-->
            <div class="widget tags">
                <header>
                    <h3 class="h6">Tags</h3>
                </header>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="tag">#covid</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#bubarkan_FPI</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#FPI_MERESAHKAN</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#AYLA_CBR</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#boikot_Perancis</a></li>
                </ul>
            </div>
        </aside>
    </div>
</div>

@endsection