@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>{{$data->tendanhmuc}}</h1>
        <h1>{!!$data->chitiet!!}</h1>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://www.youtube.com/embed/{{$data->link_video}}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{url('public/uploads/linhvuc')}}/{{$data->anhbia}}" style="width:600px" class="img-fluid animated rounded mx-auto d-block" alt="">
        
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <section id="about" class="services mb-5">
    <div class="container" data-aos="fade-up">

      <div class="row">
        @foreach($showlinhvuc as $item)
        <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box mb-5">
            <img src="{{url('public/uploads/sanpham/avatar')}}/{{$item->anh}}" class="img-fluid animated d-block w-100" alt="">
            <h6 class="mt-2 text-center" style="font-size: 15px"><a href="{{route('home.chitiet',$item->id)}}">{{$item->tensp}}</a></h6>
            <span style="display: -webkit-box;
            line-height: 25px;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;">{!!$item->chitiet!!}</span>
          </div>
        </div>
        @endforeach
      </div>

    </div>
    <div>
      <div class="pagination justify-content-center" >{{$showlinhvuc->appends(request()->all())->links()}}</div>
    </div>
  </section>
</main><!-- End #main -->

@endsection
       