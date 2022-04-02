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
              <h3 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">KẾT QUẢ TÌM KIẾM THEO TAG: <b style="color: red; text-transform: uppercase">{{$key}}</b></h3>
            </div>
        </div>
    </section>

    <section id="about" class="services mb-5">
        <div class="container" data-aos="fade-up">
    
          <div class="row">
            @foreach($timkiem_tag as $item)
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box mb-5">
                <img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" class="img-fluid animated d-block w-100" alt="">
                <h6 class="mt-2 text-center" style="font-size: 15px"><a href="{{route('home.chitietbai',$item->id)}}">{{$item->tenbai}}</a></h6>
                <span style="display: -webkit-box;
                line-height: 25px;
                overflow: hidden;
                text-overflow: ellipsis;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;">{!!$item->mota!!}</span>
              </div>
            </div>
            @endforeach
          </div>
    
        </div>
        {{-- <div>
          <div class="pagination justify-content-center" >{{$timkiem_tag->appends(request()->all())->links()}}</div>
        </div> --}}
    </section>
</main><!-- End #main -->

@endsection
       