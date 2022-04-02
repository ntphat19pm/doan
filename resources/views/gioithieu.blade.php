@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_gioithieu.jpg'); background-size:1600px; height: 300px">

  <div class="container">
    <h1 class="text-center">GIỚI THIỆU CHUNG</h1>
  </div>

</section><!-- End Hero -->

<main id="main">
  <section id="cliens" class="cliens section-bg">
    <div class="container mt-3 mb-3">
        <div class="row" data-aos="zoom-in">
          
          <div class="col-lg-4 d-flex align-items-center justify-content-center">
            <img src="{{url('public/uploads')}}/logo1.png" class="img-fluid" alt="" style="width:1000px">
          </div>
          @foreach ($gioithieu as $item)
          <div class="col-lg-8 ">
            {!!$item->noidung!!}
          </div>
          @endforeach
        </div>
    </div>
  </section>

  <section id="services" class="services">
    <div class="container mt-5" data-aos="fade-up">

      <div class="row">
        <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{url('public/uploads/icon')}}/tram_hatang.png" class="img-fluid mr-5" alt="" style="width:200px">
              </div>
              @foreach ($gioithieu as $item)
              <div class="col-lg-8">
                <b style="font-size: 45px">{{number_format($item->tram_hatang)}} </b><b style="color: red">TRẠM</b>
                <br><p style="font-size: 14px">HẠ TẦNG SỐ 1 VIỆT NAM <br>(2G, 3G, 4G, 5G)</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{url('public/uploads/icon')}}/trungtam.png" class="img-fluid mr-5" alt="" style="width:200px">
              </div>
              @foreach ($gioithieu as $item)
              <div class="col-lg-8">
                <b style="font-size: 45px">0{{number_format($item->trungtam)}} </b><b style="color: red">TRUNG TÂM</b>
                <br><p style="font-size: 14px">TRUNG TÂM DỮ LIỆU ĐẠT CHUẨN RATED 3-TIA 942 VÀ PCI DSS</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{url('public/uploads/icon')}}/capquang.png" class="img-fluid mr-5" alt="" style="width:200px">
              </div>
              @foreach ($gioithieu as $item)
              <div class="col-lg-8">
                <b style="font-size: 45px">{{number_format($item->capquang)}} </b><b style="color: red">KM</b>
                <br><p style="font-size: 14px">HẠ TẦNG CÁP QUANG TRUYỀN DẪN LỚN NHẤT</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{url('public/uploads/icon')}}/diem_giaodich.png" class="img-fluid mr-5" alt="" style="width:200px">
              </div>
              @foreach ($gioithieu as $item)
              <div class="col-lg-8">
                <b style="font-size: 39px">{{number_format($item->diem_giaodich)}} </b><b style="color: red; font-size: 9px">ĐIỂM GIAO DỊCH</b>
                <br><p style="font-size: 14px">HẠ TẦNG THANH TOÁN</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{url('public/uploads/icon')}}/dieuhanh.png" class="img-fluid mr-5" alt="" style="width:200px">
              </div>
              @foreach ($gioithieu as $item)
              <div class="col-lg-8">
                <b style="font-size: 45px">{{$item->dieuhanh}} </b><b style="color: red"></b>
                <br><p style="font-size: 14px">HỆ THỐNG ĐIỀU HÀNH GIÁM SÁT MẠNG LƯỚI 11 QUỐC GIA</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{url('public/uploads/icon')}}/diem_giaonhan.png" class="img-fluid mr-5" alt="" style="width:200px">
              </div>
              @foreach ($gioithieu as $item)
              <div class="col-lg-8">
                <b style="font-size: 45px">{{number_format($item->diem_giaonhan)}} </b><b style="color: red; font-size: 11px">ĐIỂM GIAO NHẬN</b>
                <br><p style="font-size: 14px">HẠ TẦNG LOGISTICS GỒM 1.000 BƯU CỤC TRÊN TOÀN QUỐC</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="cliens" class="cliens section-bg">
    <div class="container mt-3 mb-5">
        <div class="row">
          <div class="col-lg-6 text-left">
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Đội ngũ </h2>
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="color: red">NHÂN SỰ </b></h2>
            <hr>
            <p style="text-align: left">Nhân sự Quản lý, Kinh doanh và Kỹ sư Công nghệ thông tin trình độ cao (trên 92% trình độ Đại học và trên Đại học), có mặt ở khắp 63 tỉnh/thành phố từ tỉnh, huyện, xã, sẵn sàng đáp ứng triển khai nhanh, toàn diện các giải pháp Công nghệ thông tin - Viễn thông đến khách hàng.</p>
            <div class="row">
              @foreach ($gioithieu as $item)
              <div class="col-lg-6">
                <h1 style="text-align: left; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="font-size: 75px">{{number_format($item->canbo_nhanvien)}} </b></h1>
                <p style="text-align: left; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="font-size: 15px">CÁN BỘ CÔNG NHÂN VIÊN </b></p>
              </div>
              <div class="col-lg-6">
                <h1 style="text-align: left; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="font-size: 75px">{{number_format($item->chuyengia)}} </b></h1>
                <p style="text-align: left; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="font-size: 15px">CHUYÊN GIA AN NINH MẠNG CHỨNG CHỈ AN TOÀN THÔNG TIN THẾ GIỚI: CISSP , CCIE, CEH, SECURITY+,...</b></p>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-6 text-left">
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Giá trị </h2>
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="color: red">THƯƠNG HIỆU </b></h2>
            <hr>
            <p style="text-align: left">TRỰC THUỘC TẬP ĐOÀN VIETTEL,<br>THƯƠNG HIỆU GIÁ TRỊ NHẤT VIỆT NAM</p>
            <div class="row mt-3">
              @foreach ($gioithieu as $item)
              <b style="font-size: 130px">{{number_format($item->giatri)}} TỶ USD </b>
              @endforeach
              <i>(Đánh giá bới tổ chức định giá thương hiệu thế giới Brand Finance)</i>
            </div>
          </div>
        </div>
    </div>
  </section>

  <section id="services" class="services">
    <div class="container mt-5 mb-3">
        <div class="row">
          <div class="col-lg-6">
            <img src="{{url('public/uploads')}}/staff.jpg" class="img-fluid mr-5" alt="" style="width:600px">
          </div>
          <div class="col-lg-6">
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="ml-5">Chăm sóc </h2>
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="ml-5"><b style="color: red">KHÁCH HÀNG </b></h2>
            <br><a href="tel:0917663865"><img src="{{url('public/uploads')}}/phone.png" class="img-fluid" alt="" style="width:60px"></a> <b>LIÊN HỆ CHÚNG TÔI: 0917663865</b>
            @foreach ($gioithieu as $item)
            <br><br><b style="font-size: 35px">{{$item->chamsoc}}</b>
            @endforeach
          </div>
        </div>
    </div>
  </section>

  <section id="services" class="services section-bg">
    <div class="container mt-5 mb-3">
      <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Xem thêm </h2>
      <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b style="color: red">GIỚI THIỆU </b></h2>
      <div class="row mt-5">
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
       