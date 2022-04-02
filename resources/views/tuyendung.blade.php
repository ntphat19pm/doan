@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_tuyendung.png'); background-size:1520px; height: 950px">

  <div class="container">
    {{-- <h1 class="text-center">TUYỂN DỤNG</h1> --}}
  </div>

</section><!-- End Hero -->

<main id="main">
    <div class="row">
        <div class="col-lg-2">
        </div>              
        <div class="col-lg-8">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSem15Aas2srBer-kQm-6ErKIKh8XTwMlFVAMV_0YLNuLAPgYw/viewform?embedded=true" width="100%" height="1500" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</main><!-- End #main -->

@endsection
       