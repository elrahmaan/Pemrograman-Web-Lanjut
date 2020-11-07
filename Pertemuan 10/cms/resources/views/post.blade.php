@extends('layouts.app')

@section('title', 'Post - Indonesian Cultures Blog')

@section('content')
    <div class="container">
      <div class="row">
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
            <h1>{{$cultures->title}}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
              <div class="post-thumbnail"><img src="{{$cultures->featured_image}}" class="img-fluid"></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="category"><a href="#">{{$cultures->category}}</a></div>
                </div>
                <div class="post-single">Dipublikasikan pada {{$cultures->publish_at}}</div>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStt8Ue2ZBqbY1HGhCxwV_G6bh5-E3-ggkXAQ&usqp=CAU' class="img-fluid"></div>
                    <div class="title"><span>{{$cultures->author}}</span></div></a>
                </div>
                <hr>
                <div class="post-body" align="justify">
                  <p class="lead">{{$cultures-> intro}}</p>
                  <p>{{$cultures-> paragraph1}}</p>
                  <p>{{$cultures-> paragraph2}}</p>
                  <p>Sumber : blogkulo.com </p>
                </div>
                <div class="post-tags"><a href="#" class="tag">#indonesiaku</a><a href="#" class="tag">#lestarikan_budaya</a><a href="#" class="tag">#bangga_jadi_indonesia</a><a href="#" class="tag">#wonderful_indonesia</a><a href="#" class="tag">#indonesia_makmur</a></div>
                
                <!-- Comments Form -->
                <div class="card my-4">
                  <h5 class="card-header">Leave a Comment:</h5>
                  <div class="card-body">
                    <form action="" method="post">
                    @csrf
                    <input type="hidden" name="article_id" value="{{$cultures->id}}"></br>
                      <div class="form-group">
                      
                        <input type="text" class="form-control" required="required" name="commenter" placeholder="name"><br>
                        <textarea class="form-control" rows="3" required="required" name="comment_text" placeholder="comment"></textarea><br>
                        <input type="text" class="form-control" required="required" name="comment_time" placeholder="Tanggal Bulan Tahun" style="height: 25px;"><br>
                      </div>
                      <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                  </div>
                </div>

                <!--Post Comments-->
                
                <div class="post-comments">
                  <header>
                    <h3 class="h6">Post Comments<span class="no-of-comments">(1)</span></h3>
                  </header>
                  @foreach($comments as $comment)
                  @if($comment->article_id == $cultures->id)
                  <div class="comment">
                    <!-- <div class="comment-header d-flex justify-content-between"> -->
                      <div class="user d-flex align-items-center">
                        <div class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStt8Ue2ZBqbY1HGhCxwV_G6bh5-E3-ggkXAQ&usqp=CAU" alt="..." class="img-fluid"></div>
                        <!--<div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div> -->
                        <div class="title"><strong>{{$comment->commenter}}</strong><span class="date">{{$comment->comment_time}}</span></div>
                      </div>
                      
                    <!-- </div> -->
                    <div class="comment-body">
                      <p>{{$comment->comment_text}}</p>
                    </div>
                    @endif
                  @endforeach
                  </div>
                </div>
              </div>
            </div>
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