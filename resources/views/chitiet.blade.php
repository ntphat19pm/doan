@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads/sanpham/chitiet')}}/{{$data->anh1}}'); background-size:1600px; height: 300px">

  <div class="container">
    <h1 class="text-center" style="color: rgb(255, 0, 0); opacity:inherit">{{$data->tensp}}</h1>
  </div>

</section><!-- End Hero -->

<main id="main">
  <section id="cliens" class="cliens section-bg">
    <div class="container">
        {!!$data->chitiet!!}

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-2 d-flex align-items-center justify-content-center">
            
          </div>
          @foreach($lienhe as $item)
            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <a href="mailto:{{$item->email}}"><img src="{{url('public/uploads')}}/mail.png" class="img-fluid mr-5" alt="" style="width:150px"></a>
            </div>
            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <a href="tel:{{$item->sdt}}"><img src="{{url('public/uploads')}}/phone.png" class="img-fluid" alt="" style="width:150px"></a>
            </div>
          @endforeach
          @if($data->link=="")
          @else
          
            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <a href="https://www.youtube.com/embed/{{$data->link}}" class="glightbox btn-watch-video"><img src="{{url('public/uploads')}}/video.png" class="img-fluid mr-5" alt="" style="width:140px"></a>
            </div>
          
          @endif
          @if($data->link_pdf=="")
          @else
          
            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1"><img src="{{url('public/uploads')}}/pdf.png" class="img-fluid mr-5" alt="" style="width:180px"></a>
            </div>
          
          @endif
        </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio mt-5 mb-5">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>CHI TIẾT GIẢI PHÁP</h2>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Đặc điểm</li>
        <li data-filter=".filter-card">Tính năng</li>
        <li data-filter=".filter-web">Lợi ích</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        
        @foreach($dacdiem as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="{{url('public/uploads')}}/viettel.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$item->tendacdiem}}</h4>
            <p>Đặc điểm</p>
            <a href="{{url('public/uploads')}}/viettel.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ĐẶC ĐIỂM <br>{!!$item->chitiet!!}"><i class="bx bx-plus"></i></a>
          </div>
        </div>
        @endforeach
        @foreach($loiich as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="{{url('public/uploads')}}/viettel.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$item->tenloiich}}</h4>
            <p>Lợi ích</p>
            <a href="{{url('public/uploads')}}/viettel.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="LỢI ÍCH <br>{!!$item->chitiet!!}"><i class="bx bx-plus"></i></a>
          </div>
        </div>
        @endforeach
        @foreach($tinhnang as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="{{url('public/uploads')}}/viettel.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$item->tentinhnang}}</h4>
            <p>Tính năng</p>
            <a href="{{url('public/uploads')}}/viettel.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="TÍNH NĂNG <br>{!!$item->chitiet!!}"><i class="bx bx-plus"></i></a>
          </div>
        </div>
        @endforeach

      </div>

    </div>
  </section>

  <section id="team" class="team section-bg">

    <div class="container mt-5 mb-5" data-aos="fade-up">
      <div class="member">
        <div class=" text-center">
          <h4 style="font-size: 40px">GIÁ DỊCH VỤ</h4>
          <p style="font-size: 15px"><i>Quý khách vui lòng liên hệ qua đầu số bán hàng, tư vấn dịch vụ trực tiếp: 18008000 (miễn phí).</i></p>
          <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ĐĂNG KÝ NGAY
          </button>
          
          <!-- Modal -->

        </div>
      </div>
    </div>

    <form action="{{route('home.postthongtin')}}" method="post">
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
                <input type="text" class="form-control" name="hoten" id="hoten" required >
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group invalid mt-3">
                    <label for="sdt" class="form-label">Nhập số điện thoại</label>
                    <input type="text" class="form-control" name="sdt" id="sdt" required >
                  </div>
                  <div class="form-group invalid mt-2">
                    <label for="diachi" class="form-label">Nhập địa chỉ</label>
                    <input type="text" class="form-control" name="diachi" id="diachi" required >
                  </div>

                  <div class="form-group mt-3">
                    <label for="sanpham_id">Sản phẩm tư vấn<span class="text-danger font-weight-bold">*</span></label>
                    <select id="sanpham_id" class="form-control custom-select @error('sanpham_id') is-invalid @enderror" name="sanpham_id" required autofocus>
                        <option value="">--Chọn sản phẩm--</option>
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
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="5"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Gửi thông tin</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form action="" method="">
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">TÀI LIỆU KÈM THEO</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <iframe src="{{$data->link_pdf}}/preview" width="760" height="480" allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </form>

  </section>
</main><!-- End #main -->

@endsection
       