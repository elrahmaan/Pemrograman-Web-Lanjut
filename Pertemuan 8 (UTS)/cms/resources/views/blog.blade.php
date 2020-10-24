@extends('layouts.app')

@section('title', 'Blog - Indonesian Cultures Blog')

@section('content')
    <div class="container">
      <div class="row">
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <a><h3 class="h1">Kumpulan Artikel Terbaru</h3></a>
            <div class="row">

              <!-- post -->
              @foreach($cultures as $culture)
              <div class="post col-xl-6">
                <div class="post-thumbnail"><img src="{{$culture-> featured_image}}" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{$culture-> publish_at}}</div>
                    <div class="category"><a>{{$culture-> category}}</a></div>
                  </div>
                  <a href="/post/{{$culture->id}}"><h3 class="h4">{{$culture->title}}</h3></a>
                  <p class="text-muted">{{Str::limit($culture->intro, 100, '...')}} <a href="/post/{{$culture->id}}" class="text-dark">Lebih Detail</a></p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStt8Ue2ZBqbY1HGhCxwV_G6bh5-E3-ggkXAQ&usqp=CAU" alt="..." class="img-fluid"></div>
                      <div class="title"><span>{{$culture-> author}}</span></div></a>
                    <div class="date">{{$culture->publish_at}}</div>
                    <div class="comments meta-last">1 comments</div>
                  </footer>
                </div>
                <hr>
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
            <form action="#" class="search-form">
              <div class="form-group">
                <input class="form-control mr" type="search" placeholder="Search">
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
            <div class="item d-flex justify-content-between"><a href="#">Kesenian</a><span>3</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tradisi</a><span>2</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Budaya</a><span>2</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tarian</a><span>1</span></div>
          </div>
          <!-- Widget [Tags Cloud Widget]-->
          <div class="widget tags">       
            <header>
              <h3 class="h6">Tags</h3>
            </header>
            <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="tag">#indonesiaku</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#lestarikan_budaya</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#bangga_jadi_indonesia</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#wonderful_indonesia</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#indonesia_makmur</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
@endsection