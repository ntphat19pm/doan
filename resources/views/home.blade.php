@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>VIETTEL SOLUTION</h1>
        <h2>We are team of talented designers making websites with</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://youtu.be/vx0fceHNLC8" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
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

  <!-- ======= Cliens Section ======= -->
  <section id="cliens" class="cliens section-bg">
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h5>TIN MỚI NHẤT</h5>
          </div>
          @foreach ($baiviet as $item)
          <div class="carousel-item">
            <h5><a href="{{route('home.chitietbai',$item->id)}}">{{$item->tenbai}}</a></h5>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section><!-- End Cliens Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about mb-5">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>VỀ CHÚNG TÔI</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          @foreach ($gioithieu as $item)
          <p class="">
            {!!$item->noidung!!}
          </p>
          @endforeach
          
        </div>
        <div class="col-lg-1">
          
        </div>
        <div class="col-lg-5 ml-5">
          @foreach ($gioithieu as $item)
          <ul>
            <li><i class="ri-check-double-line"></i> Giá trị thương hiệu: <b style="font-size: 20px; color:red">{{number_format($item->giatri)}}</b> tỷ USD</li>
            <li><i class="ri-check-double-line"></i><b style="font-size: 20px; color:red">{{number_format($item->canbo_nhanvien)}}</b> kỹ sư</li>
            <li><i class="ri-check-double-line"></i><b style="font-size: 20px; color:red">{{number_format($item->chuyengia)}}</b> chuyên gia an ninh mạng</li>
            <li><i class="ri-check-double-line"></i> Mạng lưới chăm sóc khách hàng: <b style="font-size: 20px; color:red">63</b> tỉnh thành</li>
            <li><i class="ri-check-double-line"></i><b style="font-size: 20px; color:red">{{number_format($item->tram_hatang)}}</b> trạm hạ tầng số 1</li>
            <li><i class="ri-check-double-line"></i><b style="font-size: 20px; color:red">{{number_format($item->trungtam)}}</b> trung tâm dữ liệu</li>
          </ul>
          @endforeach
          <a href="{{route('home.gioithieu')}}" class="btn-learn-more">Xem thêm</a>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

      <div id="portfolio" class="our-portfolio section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <h6 style="font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">SẢN PHẨM &</h6>
                <h2 style="font-size: 35px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><span>GIẢI PHÁP</span></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-12">
              <div class="loop owl-carousel">
                @foreach ($linhvuc as $item)
                <div class="item">
                  <div class="portfolio-item">
                    <div class="thumb">
                      <img src="{{url('public/uploads/linhvuc')}}/{{$item->avatar}}" alt="" height="300px">
                      <div class="hover-content">
                        <div class="inner-content">
                          <a href="{{route('home.showlinhvuc',$item->id)}}"><h4>{{$item->tendanhmuc}}</h4></a>
                          <span>CHUYÊN MỤC SỐ</span>
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
  </section><!-- End Why Us Section -->

  <!-- ======= Skills Section ======= -->
  <section id="portfolio" class="portfolio mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>KHÁCH HÀNG TIÊU BIỂU</h2>
        <p>Dưới đây là những khách hàng tiêu biểu đã cộng tác cùng VIETTEL SOLUTION </p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Doanh nghiệp</li>
        <li data-filter=".filter-card">Chính phủ</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($doanhnghiep as $item)
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('public/uploads/doanhnghiep')}}/{{$item->hinhanh}}" class="img-fluid rounded mx-auto d-block" style="width:150px" alt=""></div>
            <div class="portfolio-info">
              <h4>{{$item->ten_kh}}</h4>
              <p>Doanh nghiệp</p>
            </div>
          </div>
        @endforeach

        @foreach ($chinhphu as $item)
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('public/uploads/doanhnghiep')}}/{{$item->hinhanh}}" class="img-fluid rounded mx-auto d-block" style="width:120px" alt=""></div>
            <div class="portfolio-info">
              <h4>{{$item->ten_kh}}</h4>
              <p>Chính phủ</p>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Skills Section -->

  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>LIÊN HỆ TƯ VẤN</h3>
          <p>Bạn có thể liên hệ với chúng tôi thông qua Email hoặc Số điện thoại. Bên cạnh đó bạn có để lại thông tin để chung tôi liên hệ.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Đăng ký ngay</a>
        </div>
      </div>
    </div>

    <form action="{{route('home.postthongtin')}}" method="post" class="needs-validation" novalidate>
      @csrf
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">THÔNG TIN ĐĂNG KÝ</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group invalid">
                <label for="hoten" class="form-label">Nhập họ và tên</label>
                <input type="hoten" class="form-control" name="hoten" id="hoten" required >
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group invalid mt-3">
                    <label for="sdt" class="form-label">Nhập số điện thoại</label>
                    <input type="number" class="form-control" name="sdt" id="sdt" required >
                  </div>
                  <div class="form-group invalid mt-2">
                    <label for="diachi" class="form-label">Nhập địa chỉ</label>
                    <input type="text" class="form-control" name="diachi" id="diachi" required >
                  </div>

                  <div class="form-group invalid mt-3">
                    <label for="sanpham_id">Sản phẩm<span class="text-danger font-weight-bold">*</span></label>
                    <select id="sanpham_id" class="form-control custom-select @error('sanpham_id') is-invalid @enderror" name="sanpham_id" required autofocus>
                        <option value="">--Chọn danh mục sản phẩm--</option>
                        @foreach($sp as $value)
                            <option value="{{ $value->id }}">{{ $value->tensp}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group invalid mt-3">
                    <label for="email" class="form-label">Nhập địa chỉ mail</label>
                    <input type="email" class="form-control" name="email" id="email" required >
                  </div>

                  <div class="form-group mt-3">
                    <label for="hinhthuc">Hình thức liên hệ<span class="text-danger font-weight-bold">*</span></label>
                    <select id="hinhthuc" class="form-control custom-select @error('hinhthuc') is-invalid @enderror" name="hinhthuc" required autofocus>
                        <option value="">--Chọn hình thức liên hệ--</option>
                        <option value="0">Gọi điện</option>
                        <option value="1">SMS</option>
                        <option value="2">Zalo</option>
                        <option value="3">Email</option>    
                    </select>
                  </div>

                  <div class="form-group mt-3">
                    <label for="yeucau_id">Yêu cầu tư vấn<span class="text-danger font-weight-bold">*</span></label>
                    <select id="yeucau_id" class="form-control custom-select @error('yeucau_id') is-invalid @enderror" name="yeucau_id" required autofocus>
                        <option value="">--Chọn yêu cầu tư vấn--</option>
                        <option value="0">Phản ánh sản phẩm dịch vụ</option>
                        <option value="1">Tư vấn sản phẩm dịch vụ</option>    
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group invalid mt-3">
                <label for="noidung" class="form-label">Nhập nội dung cụ thể</label>
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="5" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Gửi thông tin</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container-fluid" data-aos="fade-up">

      <div id="portfolio" class="our-portfolio section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <h6 style="font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">TIN TỨC</h6>
                <h2 style="font-size: 35px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><span>MỚI NHẤT</span></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-12">
              <div class="loop owl-carousel">
                @foreach ($baiviet as $item)
                <div class="item">
                  <div class="portfolio-item">
                    <div class="thumb">
                      <img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" alt="" height="220px" width="100px">
                      <div class="hover-content">
                        <div class="inner-content">
                          <a href="{{route('home.chitietbai',$item->id)}}"><h4>{{$item->tenbai}}</h4></a>
                          <span>
                            @if($item->phanloai_id==0)
                            TIN SỰ KIỆN
                            @elseif($item->phanloai_id==1)
                            TIN CÔNG NGHỆ
                            @endif

                          </span>
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
  </section><!-- End Services Section -->

  <!-- ======= Cta Section ======= -->
  <!-- End Cta Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Liên hệ</h2>
      </div>

      <div class="row">

        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="info">
            @foreach ($lienhe as $item)
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{$item->diachi}}</p>
              </div>

              <div class="email">
                <a href="mailto:{{$item->email}}"><i class="bi bi-envelope"></i></a>
                <h4>Email:</h4>
                <p>{{$item->email}}</p>
              </div>

              <div class="phone">
                <a href="tel:{{$item->sdt}}"><i class="bi bi-phone"></i></a>
                <h4>Call:</h4>
                <p>0{{number_format($item->sdt,0,',',' ')}}</p>
              </div>
              <div class="text-center">
                {!!$item->fanpage!!}
              </div>
          @endforeach
            </div>

        </div>

        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="info">
            @foreach ($lienhe as $item)
              {!!$item->map!!}

              
            @endforeach
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
       