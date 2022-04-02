@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_timkiem.png'); background-size:1520px; height: 790px">

  <div class="container">
    {{-- <h1 class="text-center">TÌM KIẾM</h1> --}}
  </div>

</section><!-- End Hero -->

<main id="main">
    <section id="cliens" class="cliens section-bg">
        <div class="container mt-3 mb-3">
            <div class="row" data-aos="zoom-in">
              <h3 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">KẾT QUẢ TÌM KIẾM: <b style="color: red; text-transform: uppercase">{{$key}}</b></h3>
            </div>
        </div>
      </section>

    <section id="portfolio" class="portfolio mt-5">
      @if(!empty($tim_sp) && !empty($tim_bv))
        <div class="container" data-aos="fade-up">
          <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter=".filter-app">Giải pháp</li>
            <li data-filter=".filter-card">Tin tức</li>
          </ul>
    
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
            @foreach ($tim_sp as $item)
            <div class="row">
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <a href="{{route('home.chitiet',$item->id)}}">
                  <div class="portfolio-img"><img src="{{url('public/uploads/sanpham/avatar')}}/{{$item->anh}}" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <a href="{{route('home.chitiet',$item->id)}}"><h4>{{$item->tensp}}</h4></a>
                  </div>
                </a>
              </div>
            </div>
           
            @endforeach
            
            
            @foreach ($tim_bv as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <a href="{{route('home.chitietbai',$item->id)}}">
                  <div class="portfolio-img"><img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <a href="{{route('home.chitietbai',$item->id)}}"><h4>{{$item->tenbai}}</h4></a>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      @else
      Không có giải pháp và tin tức cần tìm
      @endif
    </section>
</main><!-- End #main -->

@endsection
       