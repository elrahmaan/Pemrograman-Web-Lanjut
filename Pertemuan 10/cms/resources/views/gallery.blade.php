@extends('layouts.app')

@section('title', 'Gallery - Indonesian Cultures Blog')

@section('content')
    <div style="margin-top: 25px;">
      <div class="container">
        <h2>Gallery</h2>
        <header> 
          <p class="text-big">Budaya Indonesia</p>
        </header>
        <div class="row">
          @foreach($cultures as $culture)
          <div class="post col-md-4">
            <div class="item"><a href="{{$culture->featured_image}}" data-fancybox="gallery" class="image"><img src="{{$culture->featured_image}}" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">{{$culture-> publish_at}}</div>
                <div class="category">{{$culture-> category}}</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
      <div class="row">
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-1-C.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-1-C.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-2-D.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-2-D.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-3-A.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-3-A.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-1-B.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-1-B.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
      </div>
    </section>
@endsection