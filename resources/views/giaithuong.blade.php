@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_giaithuong.jpg'); background-size:1600px; height: 300px">

  <div class="container">
    <h1 class="text-center">GIẢI THƯỞNG TIÊU BIỂU</h1>
  </div>

</section><!-- End Hero -->

<main id="main">
    <section id="portfolio" class="portfolio mt-5">
        <div class="container" data-aos="fade-up">
    
          <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Giải thưởng Quốc tế- Vàng</li>
            <li data-filter=".filter-bac">Giải thưởng Quốc tế- Bạc</li>
            <li data-filter=".filter-dong">Giải thưởng Quốc tế- Đồng</li>
            <li data-filter=".filter-card">Giải thưởng trong nước</li>
          </ul>
    
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
            @foreach ($vang as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{url('public/uploads/giaithuong')}}/{{$item->avatar}}" class="img-fluid rounded mx-auto d-block" alt="" style="width:200px"></div>
                <div class="portfolio-info">
                <h4 class="text-center">Giải vàng - {{$item->nam}}<br>{{$item->ten_giaithuong}}</h4>
                <p>{!!$item->chitiet!!}</p>
                </div>
              </div>
            @endforeach
            @foreach ($bac as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-bac">
                <div class="portfolio-img"><img src="{{url('public/uploads/giaithuong')}}/{{$item->avatar}}" class="img-fluid rounded mx-auto d-block" alt="" style="width:200px"></div>
                <div class="portfolio-info">
                <h4 class="text-center">Giải vàng - {{$item->nam}}<br>{{$item->ten_giaithuong}}</h4>
                <p>{!!$item->chitiet!!}</p>
                </div>
              </div>
            @endforeach
            @foreach ($dong as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-dong">
                <div class="portfolio-img"><img src="{{url('public/uploads/giaithuong')}}/{{$item->avatar}}" class="img-fluid rounded mx-auto d-block" alt="" style="width:200px"></div>
                <div class="portfolio-info">
                <h4 class="text-center">Giải vàng - {{$item->nam}}<br>{{$item->ten_giaithuong}}</h4>
                <p>{!!$item->chitiet!!}</p>
                </div>
              </div>
            @endforeach
    
            @foreach ($trongnuoc as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="{{url('public/uploads/giaithuong')}}/{{$item->avatar}}" class="img-fluid rounded mx-auto d-block" alt="" style="width:500px"></div>
              <div class="portfolio-info">
              <h4 class="text-center">{{$item->nam}}<br>{{$item->ten_giaithuong}}</h4>
              <p>{!!$item->chitiet!!}</p>
              </div>
            </div>
          @endforeach
          </div>
    
        </div>
    </section>

    <section id="services" class="services section-bg">
      <div class="container mt-5 mb-3">
        <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Xem thêm </h2>
        <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="color: red">GIỚI THIỆU </b></h2>
        <div class="row mt-5">
          <div class="col-lg-4 mb-5" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{route('home.gioithieu')}}"><div class="icon-box h-100">
                  <img src="{{url('public/uploads')}}/icon4.png" class="img-fluid rounded mx-auto d-block" alt="" style="width:70px">
                  <br><p style="font-size: 20px" class="text-center"><b>NĂNG LỰC</b></p>
              </div></a>
            </div>
          <div class="col-lg-4 mb-5" data-aos="zoom-in" data-aos-delay="100">
            <a href="{{route('home.mangluoi')}}"><div class="icon-box h-100">
              <img src="{{url('public/uploads')}}/icon1.png" class="img-fluid rounded mx-auto d-block" alt="" style="width:80px">
                <br><p style="font-size: 20px" class="text-center"><b>MẠNG LƯỚI TOÀN CẦU</b></p>
            </div></a>
          </div>
  
          <div class="col-lg-4 mb-5" data-aos="zoom-in" data-aos-delay="100">
            <a href="{{route('home.dauan')}}"><div class="icon-box h-100">
                <img src="{{url('public/uploads')}}/icon3.png" class="img-fluid rounded mx-auto d-block" alt="" style="width:80px">
                <br><p style="font-size: 20px" class="text-center"><b>DẤU ẤN</b></p>
            </div></a>
          </div>
  
          
        </div>
      </div>
  </section>
    

</main><!-- End #main -->

@endsection
       