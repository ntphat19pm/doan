@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_mangluoi.jpg'); background-size:1600px; height: 300px">

  <div class="container">
    <h1 class="text-center">MẠNG LƯỚI TOÀN CẦU</h1>
  </div>

</section><!-- End Hero -->

<main id="main">
  <section id="about" class="about mb-5">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <h2>HƠN 110.000.000 KHÁCH HÀNG TẠI 11 NƯỚC CHÂU Á, CHÂU PHI VÀ CHÂU MỸ</h2>
        </div>
  
        <div class="row content">
          <img src="{{url('public/uploads')}}/map.png" class="img-fluid animated d-block rounded mx-auto" style="width:1000px" alt="">
        </div>
      </div>
  </section>

  <section id="cliens" class="cliens section-bg">
      <div class="container mt-3 mb-3">
          <div class="row" data-aos="zoom-in">
              @foreach($mangluoi as $item)
              <div class="col-lg-3 d-flex align-items-center justify-content-center">
                  <a href="{{$item->link}}"><img src="{{url('public/uploads/mangluoi')}}/{{$item->avatar}}" class="img-fluid" alt="" style="width:1000px"></a>
              </div>
              @endforeach
          </div>
      </div>
  </section>

  <section id="services" class="services">
    <div class="container mt-5 mb-3">
      <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Xem thêm </h2>
      <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="color: red">GIỚI THIỆU </b></h2>
      <div class="row mt-5">
        <div class="col-lg-4 mb-5" data-aos="zoom-in" data-aos-delay="100">
          <a href="{{route('home.gioithieu')}}"><div class="icon-box h-100">
            <img src="{{url('public/uploads')}}/icon4.png" class="img-fluid rounded mx-auto d-block" alt="" style="width:80px">
            <br><p style="font-size: 20px" class="text-center"><b>NĂNG LỰC</b></p>
          </div></a>
        </div>

        <div class="col-lg-4 mb-5" data-aos="zoom-in" data-aos-delay="100">
          <a href="{{route('home.giaithuong')}}"><div class="icon-box h-100">
              <img src="{{url('public/uploads')}}/icon2.png" class="img-fluid rounded mx-auto d-block" alt="" style="width:80px">
              <br><p style="font-size: 20px" class="text-center"><b>GIẢI THƯỞNG TIÊU BIỂU</b></p>
          </div></a>
        </div>

        <div class="col-lg-4 mb-5" data-aos="zoom-in" data-aos-delay="100">
          <a href="{{route('home.dauan')}}"><div class="icon-box h-100">
              <img src="{{url('public/uploads')}}/icon3.png" class="img-fluid rounded mx-auto d-block" alt="" style="width:70px">
              <br><p style="font-size: 20px" class="text-center"><b>DẤU ẤN</b></p>
          </div></a>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

@endsection
       