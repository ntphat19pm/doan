@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center"  style="background-image: url('{{url('public/uploads')}}/banner-video.jpg'); background-size:1600px; height: 800px">

  <div class="container">
    <div class="row">
      {{-- <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>VIDEO</h1>
      </div>
      <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{url('public/uploads')}}/tintuc.png" class="img-fluid animated d-block rounded mx-auto" style="width:500px" alt="">
        
      </div> --}}
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <section id="about" class="services mb-5">
    <div class="container" data-aos="fade-up">

      <div class="row">
        @foreach($video as $item)
        <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box mb-5 w-100">
            <h6 class="text-center" style="font-size: 17px; color:rgb(255, 57, 57)"><b>{{$item->tenvideo}}</b></h6>
            <span></span>
            <a class="btn btn-block btn-outline-primary mt-3 mb-3" data-bs-toggle="collapse" href="#collapseExample{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapseExample" style="width: 100%;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;">
                Mô tả chi tiết video
            </a>
            <div class="collapse mb-3" id="collapseExample{{$item->id}}">
                <div class="card card-body">
                    {!!$item->mota!!}
                </div>
            </div>
            <div class="d-flex justify-content-center justify-content-lg-start">
                {{-- <button type="button" class="btn btn-outline-info mt-2" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fa fa-upload"></i>Upload file</button> --}}
                <a href="https://www.youtube.com/embed/{{$item->link}}" class="glightbox btn btn-block btn-outline-warning" style="width: 100%;
                    border: 1px solid black;
                    display: flex;
                    align-items: center;
                    justify-content: center;"><i class="fa fa-circle-play"></i><span>Watch Video</span>
                </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div>
        <div class="pagination justify-content-center" >{{$video->appends(request()->all())->links()}}</div>
      </div>
    </div>
  </section>
</main><!-- End #main -->

@endsection
       