@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>THÀNH CÔNG</h1>
          <h2>Cám ơn bạn đã gửi thông tin cho chúng tôi. <br>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{url('public/uploads')}}/completed.png" class="img-fluid animated d-block w-100" alt="">          
        </div>
      </div>
    </div>
  
  </section>
       
@endsection