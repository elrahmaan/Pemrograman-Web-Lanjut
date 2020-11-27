@extends('layouts.app')

@section('title', 'Blog - Indonesian Cultures Blog')

@section('content')
<div class="container">
  <div class="row">
    <main class="posts-listing col-lg-8">
      <div class="container">
        <a>
          <h3 class="h1">Kumpulan Artikel Terbaru</h3>
        </a>
        <div class="row">

          <!-- post -->
          @foreach($cultures as $culture)
          @foreach($users as $user)
          @if($culture->user_id == $user->id)
          <div class="post col-xl-6">
            <div class="post-thumbnail"><img src="{{'storage/'.$culture->featured_image}}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date meta-last">{{\Carbon\Carbon::parse($culture->updated_at)->diffForHumans()}}</div>
                <div class="category"><a>{{$culture->category}}</a></div>
              </div>
              <a href="/post/{{$culture->id}}">
                <h3 class="h4">{{$culture->title}}</h3>
              </a>
              <p class="text-muted">{{Str::limit($culture->intro, 100, '...')}} <a href="/post/{{$culture->id}}" class="text-dark">Lebih Detail</a></p>
              <footer class="post-footer d-flex align-items-center">

                <a href="#" class="author d-flex align-items-center flex-wrap">
                  @if($user->profile_image != null)
                  <div class="avatar"><img src="{{'/storage/'.$user->profile_image}}" alt="..." class="img-fluid"></div>
                  @else
                  <div class="avatar"><img src="/img/avatar-user.jpg" alt="..." class="img-fluid"></div>
                  @endif
                  <div class="title"><span>{{$user-> name}}</span></div>
                </a>

                <div class="date">{{\Carbon\Carbon::parse($culture->updated_at)->isoFormat('dddd, D MMMM Y')}}</div>

                <div class="comments meta-last"></div>
              </footer>
            </div>
            <hr>
          </div>
          @endif
          @endforeach
          @endforeach

          {{$cultures->links()}}

        </div>

        <!-- Pagination -->
        <!-- <nav aria-label="Page navigation example">
          <ul class="pagination pagination-template d-flex justify-content-center">
            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
            <li class="page-item"><a href="#" class="page-link active">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
          </ul>
        </nav> -->
      </div>
    </main>
    <aside class="col-lg-4">
      <!-- Widget [Search Bar Widget]-->
      <div class="widget search">
        <header>
          <h3 class="h6">Search the blog</h3>
        </header>
        <form action="/search" class="search-form" method="get">
          <div class="form-group">
            <input class="form-control mr" type="search" placeholder="Search" name="search">
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
        <div class="item d-flex justify-content-between"><a href="#">Kesenian</a><span><i class="fas fa-seedling" aria-hidden="true"></span></i></div>
        <div class="item d-flex justify-content-between"><a href="#">Tradisi</a><span><i class="fas fa-seedling" aria-hidden="true"></i></span></div>
        <div class="item d-flex justify-content-between"><a href="#">Budaya</a><span><i class="fas fa-seedling"></i></span></div>
        <div class="item d-flex justify-content-between"><a href="#">Tarian</a><span><i class="fas fa-seedling"></i></span></div>
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