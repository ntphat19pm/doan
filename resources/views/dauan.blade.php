@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_dauan.jpg'); background-size:1600px; height: 300px">

  <div class="container">
    <h1 class="text-center">DẤU ẤN</h1>
  </div>

</section><!-- End Hero -->

<main id="main">
    <section id="timeline">
        @foreach ($dauan as $item)
        <div class="tl-item">
          
          <div class="tl-bg" style="background-image: url('{{url('public/uploads/dauan')}}/{{$item->avatar}}')"></div>
      
          <div class="tl-content">
            <h1 class="f3 text--accent ttu">{{$item->nam}}</h1>
            <b style="color: rgb(255, 0, 0)">{!!$item->noidung!!}</b>
          </div>
      
        </div>
        @endforeach
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
              <a href="{{route('home.giaithuong')}}"><div class="icon-box h-100">
                  <img src="{{url('public/uploads')}}/icon2.png" class="img-fluid rounded mx-auto d-block" alt="" style="width:80px">
                  <br><p style="font-size: 20px" class="text-center"><b>GIẢI THƯỞNG TIÊU BIỂU</b></p>
              </div></a>
            </div>
    
            
          </div>
        </div>
    </section>

    <style>
        body
        {
            font-family: 'Source Sans Pro', Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 1.75;
        }
        #timeline {
            display: flex;
            background-color: #031625;
        }
        #timeline:hover .tl-item {
            width: 23.3333%;
        }
        .tl-item {
            transform: translate3d(0, 0, 0);
            position: relative;
            width: 25%;
            height: 100vh;
            min-height: 600px;
            color: #fff;
            overflow: hidden;
            transition: width 0.5s ease;
        }
        .tl-item:before, .tl-item:after {
            transform: translate3d(0, 0, 0);
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        .tl-item:after {
            background: rgba(3, 22, 37, 0.85);
            opacity: 1;
            transition: opacity 0.5s ease;
        }
        .tl-item:before {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 75%);
            z-index: 1;
            opacity: 0;
            transform: translate3d(0, 0, 0) translateY(50%);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .tl-item:hover {
            width: 30% !important;
        }
        .tl-item:hover:after {
            opacity: 0;
        }
        .tl-item:hover:before {
            opacity: 1;
            transform: translate3d(0, 0, 0) translateY(0);
            transition: opacity 1s ease, transform 1s ease 0.25s;
        }
        .tl-item:hover .tl-content {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.75s ease 0.5s;
        }
        .tl-item:hover .tl-bg {
            filter: grayscale(0);
        }
        .tl-content {
            transform: translate3d(0, 0, 0) translateY(25px);
            position: relative;
            z-index: 1;
            text-align: center;
            margin: 0 1.618em;
            top: 55%;
            opacity: 0;
        }
        .tl-content h1 {
            font-family: 'Pathway Gothic One', Helvetica Neue, Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            color: #1779cf;
            font-size: 1.44rem;
            font-weight: normal;
        }
        .tl-year {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            z-index: 1;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
        }
        .tl-year p {
            font-family: 'Pathway Gothic One', Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 1.728rem;
            line-height: 0;
        }
        .tl-bg {
            transform: translate3d(0, 0, 0);
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center center;
            transition: filter 0.5s ease;
            filter: grayscale(100%);
        }
 
    </style>

</main><!-- End #main -->

@endsection
       