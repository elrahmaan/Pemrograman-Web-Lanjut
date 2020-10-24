@extends('layouts.app')

@section('title', 'Indonesian Cultures Blog')

@section('content')
    <section style="background: url(img/bc1.jpg); background-size: cover; background-position: center center;" class="hero">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1 style="color: black;">Welcome To Indonesian Cultures Blog</h1>
              
              @guest
                <a href="{{ route('login') }}" class="hero-link"><strong>Kunjungi Blog</strong></a>
              @else
                <a href="{{ route('blog') }}" class="hero-link"><strong>Kunjungi Blog</strong></a>
              @endguest
            </div>
          </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
        </div>
    </section>
    
    <!-- Intro Section-->
    <section class="intro">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h2 class="h3">Budaya Indonesia</h2>
              <p class="text-big">Bicara soal <strong>budaya Indonesia</strong> tidak akan pernah ada habisnya. Keragamannya mulai dari agama, suku, etnis, tarian dan masih banyak lagi dan dari wilayah ke wilayah lainnya sudah berbeda adat istiadatnya. Hal ini juga yang sering <strong>menarik perhatian dunia</strong>. Wisatawan asing yang berkunjung ke indonesia pasti akan terkesan dengan keragaman budaya di indonesia ini.</p>
              <p class="text-big">Budaya di indonesia ini merupakan <strong>peninggalan dari nenek moyang</strong> yang harus kita jaga. <strong>Indonesia</strong> sendiri sudah terkenal akan keragaman budaya. Maka tidak heran jika warga negara asing justru banyak yang rela bersekolah kebudayaan indonesia dan menetap di indonesia. Kita sebagai warga negara indonesia harus<strong> bangga dan membantu untuk tetap melestarikannya</strong>.</p>
            </div>
          </div>
        </div>
    </section>
    
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
        <div class="row">
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gambar-1-A.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-1-A.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gambar-2-C.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-2-C.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gambar-3-B.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-3-B.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gambar-3-C.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-3-C.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
          </div>
        </div>
    </section>
@endsection