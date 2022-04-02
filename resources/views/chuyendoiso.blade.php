@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>TƯ VẤN CHUYỂN ĐỔI SỐ</h1>
        <h2>Cung cấp giải pháp chuyển đổi số toàn diện trên mọi hoạt động của tổ chức và doanh
            nghiệp, cá thể hóa cho từng ngành nghề, lĩnh vực với phương pháp luận cụ thể cùng
            đội ngũ chuyên gia giàu kinh nghiệm.</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://youtu.be/vx0fceHNLC8" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('public/arsha')}}/assets/img/hero-img.png" class="img-fluid animated d-block w-100" alt="">
            </div>
            @foreach($slider as $item)
            <div class="carousel-item">
              <img src="{{url('public/uploads/slider')}}/{{$item->avatar}}" class="img-fluid animated d-block rounded mx-auto" style="width:500px" alt="">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
<section id="portfolio" class="portfolio mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>DỊCH VỤ</h2>
      </div>


      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($dichvu_chuyendoi as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('public/uploads/dichvu_chuyendoi')}}/{{$item->avatar}}" class="img-fluid rounded mx-auto d-block" style="width:100%" alt=""></div>
            <div class="portfolio-info">
              <h4 style="font-size:25px">{{$item->ten_dichvu}}</h4>
                <b>
                  {!!$item->chitiet!!}
                </b>
            </div>
          </div>
        @endforeach
          
      </div>

    </div>
</section>

<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div id="portfolio" class="our-portfolio section">
      <div class="container">
      <div class="section-title">
        <h2>DỊCH VỤ</h2>
      </div>
      </div>
      <div class="container">
        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Lĩnh vực</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Chức năng</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="row">
                <div class="col-lg-12">
                  <div class="loop owl-carousel">
                    @foreach ($chuyendoi_linhvuc as $item)
                    <div class="item">
                      <div class="portfolio-item">
                        <div class="thumb">
                          <img src="{{url('public/uploads/danhmuc_chuyendoi')}}/{{$item->avatar}}" alt="" height="200px">
                          <div class="hover-content">
                            <div class="inner-content">
                              <h4>{{$item->ten_danhmuc}}</h4>
                              <a class="btn btn-danger" title="{!!$item->chitiet!!}" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">Chi tiết</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="row">
                <div class="col-lg-12">
                  <div class="loop owl-carousel">
                    @foreach ($chuyendoi_chucnang as $item)
                    <div class="item">
                      <div class="portfolio-item">
                        <div class="thumb">
                        <img src="{{url('public/uploads/danhmuc_chuyendoi')}}/{{$item->avatar}}" alt="" height="200px">
                          <div class="hover-content">
                            <div class="inner-content">
                              <h4>{{$item->ten_danhmuc}}</h4>
                              <a class="btn btn-danger" title="{!!$item->chitiet!!}" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">Chi tiết</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="" class="d-flex align-items-center mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-2">
                
              </div>
              <div class="col-lg-8">
                <img src="{{url('public/uploads')}}/4912139.jpg" width="100%">
              </div>
              <div class="col-lg-2">
                
              </div>
            </div>
          </div>
          @foreach($review as $item)
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4">
                  <img src="{{url('public/uploads/review')}}/{{$item->avatar}}" width="100%">
              </div>
              <div class="col-lg-7">
                  <b style="font-size:50px">KHÁCH HÀNG NÓI GÌ ?</b>
                  <br><br><i>{!!$item->noidung!!}</i>
                  <br><b style="font-size:50px"> {{$item->ten_reviewer}}</b>
                  <br> <p style="font-size:25px">{{$item->noicongtac}}</p>
                  <hr>
              </div>
              <div class="col-lg-1">
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        
    </div>
  </div>

</section>

<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div id="portfolio" class="our-portfolio section">
      <div class="container">
      <div class="section-title">
        <h2>KHÁCH HÀNG DOANH NGHIỆP</h2>
      </div>
      </div>
      <div class="container">
        
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-12">
              <div class="loop owl-carousel">
                @foreach ($doanhnghiep as $item)
                <div class="item">
                  <div class="portfolio-item">
                    <div class="thumb">
                      <img src="{{url('public/uploads/doanhnghiep')}}/{{$item->hinhanh}}" alt="" height="100px">
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
      <div class="container">
      <div class="section-title">
        <h2>KHÁCH HÀNG CHÍNH PHỦ</h2>
      </div>
      </div>
      <div class="container">
        
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-12">
              <div class="loop owl-carousel">
                @foreach ($chinhphu as $item)
                <div class="item">
                  <div class="portfolio-item">
                    <div class="thumb">
                      <img src="{{url('public/uploads/doanhnghiep')}}/{{$item->hinhanh}}" alt="" height="250px">
                      <div class="hover-content">
                        <div class="inner-content">
                          <h4>{{$item->ten_kh}}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
      <div class="container">
      <div class="section-title">
        <h2>ĐỐI TÁC</h2>
      </div>
      </div>
      <div class="container">
        
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-12">
              <div class="loop owl-carousel">
                @foreach ($doitac as $item)
                <div class="item">
                  <div class="portfolio-item">
                    <div class="thumb">
                      <img src="{{url('public/uploads/doitac')}}/{{$item->hinhanh}}" alt="" height="80px">
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact mt-5">
<div id="contact" class="contact-us section">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{route('home.postlienhe_chuyendoi')}}" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="row">
              <div class="section-title">
                <h2>DỊCH VỤ</h2>
                <p>Liên hệ ngay với chúng tôi để cập nhật những xu hướng thị trường chuyển đổi số mới nhất, và nhận tư vấn từ chúng tôi</p>
              </div>
              <div class="col-lg-12">
                  <div class="row">
                      <div class="col-lg-6">
                          <fieldset>
                          <input type="text" name="hoten_lienhe" id="hoten_lienhe" class="form-control" placeholder="Họ tên" autocomplete="off" required>
                        </fieldset>
                      </div>
                      <div class="col-lg-3">
                          <fieldset>
                          <input type="sdt_lienhe" name="sdt_lienhe" id="sdt_lienhe" class="form-control" placeholder="Số điện thoại" autocomplete="off" required>
                          </fieldset>
                      </div>
                      <div class="col-lg-3">
                          <fieldset>
                          <input type="text" name="email_lienhe" id="email_lienhe" pattern="[^ @]*@[^ @]*" placeholder="Email" class="form-control" required="" autocomplete="off">
                          </fieldset>
                      </div>
                      <div class="col-lg-6">
                          <fieldset>
                          <input type="text" name="congty_lienhe" id="congty_lienhe" class="form-control" placeholder="Công ty" autocomplete="off" required="">
                          </fieldset>
                      </div>
                      <div class="col-lg-6">
                          <fieldset>
                              <select id="linhvuc_lienhe" class="form-select" name="linhvuc_lienhe" required="">
                                  <option value="">--Chọn lĩnh vực--</option>
                                  @foreach($chuyendoi_linhvuc as $value)
                                      <option value="{{ $value->id }}">{{ $value->ten_danhmuc}}</option>
                                  @endforeach
                              </select>
                          </fieldset>
                      </div>
                      <div class="col-lg-12">
                          <fieldset>
                          <textarea name="chitiet" type="text" class="form-control" id="chitiet" placeholder="Message" required=""></textarea>  
                          </fieldset>
                      </div>
                      <div class="col-lg-12">
                          <fieldset>
                          <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                          </fieldset>
                      </div>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</section>
</main><!-- End #main -->
@endsection


@section('js')
<script>
  $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
  });

  (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

@endsection
