@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_cauhoi.png'); background-size:1600px; height: 380px;">

  <div class="container">
    {{-- <h1 class="text-center">CÂU HỎI THƯỜNG GẶP</h1> --}}
  </div>

</section><!-- End Hero -->

<main id="main"> 
    <section id="faq" class="faq mt-5 mb-5">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                GỬI CÂU HỎI
            </button>
          </div>
  
          <div class="faq-list mb-5">
            <ul>  
              @foreach($cauhoi as $item)
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-{{$item->id}}" class="collapsed">{{$item->cauhoi}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-{{$item->id}}" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    {!!$item->traloi!!}
                  </p>
                </div>
              </li>
              @endforeach

  
            </ul>
          </div>
  
        </div>

        <form action="{{route('home.postcauhoi')}}" method="post">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">THÔNG TIN ĐẶT CÂU HỎI</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
      
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group invalid mt-3">
                            <label for="hoten" class="form-label">Nhập họ và tên</label>
                            <input type="text" class="form-control" name="hoten" id="hoten" required >
                            </div>
                            <div class="form-group invalid mt-2">
                            <label for="diachi" class="form-label">Nhập địa chỉ</label>
                            <input type="text" class="form-control" name="diachi" id="diachi" required >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group invalid mt-3">
                            <label for="email" class="form-label">Nhập địa chỉ mail</label>
                            <input type="email" class="form-control" name="email" id="email" required >
                            </div>

                            <div class="form-group invalid mt-3">
                                <label for="sdt" class="form-label">Nhập số điện thoại</label>
                                <input type="text" class="form-control" name="sdt" id="sdt" required >
                            </div>
                        </div>
                    </div>
                    <div class="form-group invalid mt-3">
                      <label for="cauhoi" class="form-label">Nhập câu hỏi cụ thể</label>
                      <textarea class="form-control" name="cauhoi" id="cauhoi" cols="10" rows="5"></textarea>
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
  

</main><!-- End #main -->

@endsection
       