
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    @foreach ($lienhe as $item)
    {{$item->ten_hethong}}
    @endforeach
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('public/arsha')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('public/arsha')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('public/arsha')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/fontawesome-free/css/all.min.css">
  <link href="{{url('public/arsha')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
  {{-- <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/select2/css/select2.min.css"> --}}
  <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Template Main CSS File -->
  <link href="{{url('public/arsha')}}/assets/css/style.css" rel="stylesheet">

  <link href="{{url('public/seo_dream')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/fontawesome.css">
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/templatemo-seo-dream.css">
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/animated.css">
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/owl.css">

  <script>
    function SHPassword(x)
    {
      var chbox=x.checked;
      if(chbox)
      {
        document.getElementById("password").type="text";
        document.getElementById("repassword").type="text";
      }
      else{
        document.getElementById("password").type="password";
        document.getElementById("repassword").type="password";
      }
      
    }
  </script>

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <form action="{{ route('home.timkiem') }}" method="get" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal1111" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tìm kiếm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" class="form-inline mb-3" autocomplete="off">
    
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="timkiem" aria-describedby="button-addon2" placeholder="Search..."> 
                {{-- <input type="text" name="tukhoa" id="tukhoa" class="form-control typeahead" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"> --}}
              </div>
            </form> 
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <a href="{{route('home.home')}}">
          @foreach ($lienhe as $item)
            <img class="" width="55px" src="{{url('public/uploads')}}/{{$item->logo}}" alt="logo" />
          @endforeach
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="{{route('home.home')}}"><span>Trang chủ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{route('home.gioithieu')}}"><span>Giới thiệu chung</span></a></li>
              <li class="dropdown"><a href="{{route('home.mangluoi')}}"><span>Mạng lưới toàn cầu</span></a></li>
              <li class="dropdown"><a href="{{route('home.giaithuong')}}"><span>Giải thưởng</span></a></li>
              <li class="dropdown"><a href="{{route('home.dauan')}}"><span>Dấu ấn</span></a></li>
              <li class="dropdown"><a href="#contact"><span>Liên hệ</span></a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route('home.chuyendoiso')}}">Chuyển đổi số</a></li>
          <li class="dropdown"><a href="#"><span>Giải pháp</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Lĩnh vực</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach ($linhvuc as $item)
                    <li><a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Dịch vụ</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach ($dichvu as $item)
                    <li><a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
                  @endforeach
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://3dbooth.egal.vn/khonggianao/viettel/" target="_blank">Không gian số</a></li>          
          <li class="dropdown"><a href="#"><span>Tin tức</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{route('home.baiviet')}}"><span>Bài viết</span></a></li>
              <li class="dropdown"><a href="{{route('home.video')}}"><span>Video</span></a></li>
            </ul>
          </li>     
          <!-- <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li> -->
          <li class="dropdown"><a href="#"><span>Hỗ trợ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{route('home.cauhoi')}}"><span>Câu hỏi thường gặp</span></a></li>
              <li class="dropdown"><a href="{{route('home.chinhsach')}}"><span>Chính sách bảo mật</span></a></li>
              <li class="dropdown"><a href="{{route('home.dieukhoan')}}"><span>Điều khoản sử dụng website</span></a></li>
              <li class="dropdown"><a href="{{route('home.tailieu')}}"><span>Tài liệu</span></a></li>
            </ul>
          </li>
          <li><a class="getstarted" href="{{route('home.tuyendung')}}">Tuyển dụng</a></li>
          <li><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1111">
            <img class="" src="{{url('public/uploads')}}/loupe.png"/>
          </a></li>
          
          <!-- Modal -->
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  </header><!-- End Header -->

  @yield('main')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            @foreach ($lienhe as $item)
              <img class="rounded mx-auto d-block " style="width:200px" src="{{url('public/uploads')}}/{{$item->logo}}" alt="logo" />
              <p>
                {{$item->diachi}} <br><br>
                <strong>Phone:</strong> 0{{number_format($item->sdt,0,',',' ')}}<br>
                <strong>Email:</strong> {{$item->email}}<br>
              </p>
            @endforeach
            <img class="rounded mx-auto d-block mt-3 " style="width:150px" src="{{url('public/uploads')}}/logo_thongbao.png" alt="logo" />
          </div>
          
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Giới thiệu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.gioithieu')}}">Giới thiệu chung</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.mangluoi')}}">Mạng lưới toàn cầu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.giaithuong')}}">Giải thưởng tiêu biểu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.dauan')}}">Dấu ấn</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Hạ tầng số</h4>
            <ul>
              @foreach ($dichvu as $item)
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Giải pháp số</h4>
            <ul>
              @foreach ($linhvuc as $item)
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Hỗ trợ</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.cauhoi')}}">Câu hỏi thường gặp</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.chinhsach')}}">Chính sách bảo mật</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.dieukhoan')}}">Điều khoản sử dụng</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.tailieu')}}">Tài liệu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.tuyendung')}}">Tuyển dụng</a></li>
            </ul>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/ViettelBusinessSolutionsCorporation" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCfs8bzO6K8IwBXsdgcHEm3g" target="_blank" class="google-plus"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.linkedin.com/company/viettel-business-solutions" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Viettel Solutions</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://www.facebook.com/ntphatdesigner/">Nguyễn Tấn Phát</a>
      </div>
      @foreach ($lienhe as $item)
      <style>
        .hotline-phone-ring-wrap {
          position: fixed;
          bottom: 0;
          left: 0;
          z-index: 999999;
        }
        .hotline-phone-ring {
          position: relative;
          visibility: visible;
          background-color: transparent;
          width: 110px;
          height: 110px;
          cursor: pointer;
          z-index: 11;
          -webkit-backface-visibility: hidden;
          -webkit-transform: translateZ(0);
          transition: visibility .5s;
          left: 0;
          bottom: 0;
          display: block;
        }
        .hotline-phone-ring-circle {
          width: 85px;
          height: 85px;
          top: 10px;
          left: 10px;
          position: absolute;
          background-color: transparent;
          border-radius: 100%;
          border: 2px solid #e60808;
          -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
          animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
          transition: all .5s;
          -webkit-transform-origin: 50% 50%;
          -ms-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
          opacity: 0.5;
        }
        .hotline-phone-ring-circle-fill {
          width: 55px;
          height: 55px;
          top: 25px;
          left: 25px;
          position: absolute;
          background-color: rgba(230, 8, 8, 0.7);
          border-radius: 100%;
          border: 2px solid transparent;
          -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
          animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
          transition: all .5s;
          -webkit-transform-origin: 50% 50%;
          -ms-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
        }
        .hotline-phone-ring-img-circle {
          background-color: #e60808;
          width: 33px;
          height: 33px;
          top: 37px;
          left: 37px;
          position: absolute;
          background-size: 20px;
          border-radius: 100%;
          border: 2px solid transparent;
          -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
          animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
          -webkit-transform-origin: 50% 50%;
          -ms-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        .hotline-phone-ring-img-circle .pps-btn-img {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
        }
        .hotline-phone-ring-img-circle .pps-btn-img img {
          width: 20px;
          height: 20px;
        }
        .hotline-bar {
          position: absolute;
          background: rgba(230, 8, 8, 0.75);
          height: 40px;
          width: 180px;
          line-height: 40px;
          border-radius: 3px;
          padding: 0 10px;
          background-size: 100%;
          cursor: pointer;
          transition: all 0.8s;
          -webkit-transition: all 0.8s;
          z-index: 9;
          box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
          border-radius: 50px !important;
          /* width: 175px !important; */
          left: 33px;
          bottom: 37px;
        }
        .hotline-bar > a {
          color: #fff;
          text-decoration: none;
          font-size: 15px;
          font-weight: bold;
          text-indent: 50px;
          display: block;
          letter-spacing: 1px;
          line-height: 40px;
          font-family: Arial;
        }
        .hotline-bar > a:hover,
        .hotline-bar > a:active {
          color: #fff;
        }
        @-webkit-keyframes phonering-alo-circle-anim {
          0% {
            -webkit-transform: rotate(0) scale(0.5) skew(1deg);
            -webkit-opacity: 0.1;
          }
          30% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            -webkit-opacity: 0.5;
          }
          100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: 0.1;
          }
        }
        @-webkit-keyframes phonering-alo-circle-fill-anim {
          0% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
          }
          50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: 0.6;
          }
          100% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
          }
        }
        @-webkit-keyframes phonering-alo-circle-img-anim {
          0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
          }
          10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
          }
          20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
          }
          30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
          }
          40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
          }
          50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
          }
          100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
          }
        }
        @media (max-width: 768px) {
          .hotline-bar {
            display: none;
          }
        }

      </style>
      <div class="hotline-phone-ring-wrap text-right">
        <div class="hotline-phone-ring">
          <div class="hotline-phone-ring-circle"></div>
          <div class="hotline-phone-ring-circle-fill"></div>
          <div class="hotline-phone-ring-img-circle">
          <a href="tel:{{$item->sdt}}" class="pps-btn-img">
            <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
          </a>
          </div>
        </div>
        <div class="hotline-bar">
          <a href="tel:{{$item->sdt}}">
            <span class="text-hotline">0{{number_format($item->sdt,0,',',' ')}}</span>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('public/arsha')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public/arsha')}}/assets/js/main.js"></script>

  <!-- Scripts -->
  <script src="{{url('public/seo_dream')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public/seo_dream')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/owl-carousel.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/animation.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/imagesloaded.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/custom.js"></script>
  <script src="{{url('public/adminlte')}}/plugins/select2/js/select2.full.min.js"></script>

  <script>
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


  @foreach ($lienhe as $item)
    {!!$item->mess!!}
    {!!$item->zalo!!}
  @endforeach
  @yield('js')
</body>

</html>