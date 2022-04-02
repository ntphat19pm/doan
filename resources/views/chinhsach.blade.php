@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_chinhsach.jpg'); background-size:1600px; height: 300px;">

  <div class="container">
    <h1 class="text-center">CHÍNH SÁCH BẢO MẬT</h1>
  </div>

</section><!-- End Hero -->

<main id="main"> 

    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
  
          <div class="row mt-5">
  
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch ">
  
              <div class="accordion-list">
                <ul>
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>01</span><b> MỤC ĐÍCH VÀ PHẠM VI THU THẬP </b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                      <div style="text-align: justify">
                        Để truy cập và sử dụng dịch vụ tại web solutions.viettel.vn, quý khách có thể được yêu cầu đăng ký với chúng tôi thông tin cá nhân (thành viên), bao gồm: tên đăng nhập, mật khẩu, điện thoại. Chúng tôi cũng thu thập thông tin về số lần viếng thăm, bao gồm số trang quý khách xem, số links (liên kết) quý khách click, những thông tin khác liên quan đến việc kết nối đến solutions.viettel.vn và các thông tin mà trình duyệt Web (Browser) quý khách sử dụng mỗi khi truy cập vào website solutions.viettel.vn gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.
                      </div>
                    </div>
                  </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span><b> PHẠM VI SỬ DỤNG THÔNG TIN </b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <div style="text-align: justify">
                            Solutions. viettel.vn sử dụng thông tin Thành viên cung cấp để:
                            <br>
                            – Hỗ trợ khách hàng khi mua sản phẩm/nội dung trên trang
                            <br>
                            – Giải đáp thắc mắc khách hàng
                            <br>
                            – Cung cấp cho khách hàng thông tin mới nhất trên Website của chúng tôi, thực hiện các khảo sát khách hàng, các hoạt động quảng bá liên quan đến các sản phẩm và dịch vụ của solutions.viettel.vn.
                        </div>
                    </div>
                  </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span><b> THỜI GIAN LƯU TRỮ THÔNG TIN</b> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <div style="text-align: justify">
                            Dữ liệu cá nhân của Thành viên sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự Thành viên đăng nhập và thực hiện hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân Thành viên sẽ được bảo mật trên máy chủ của solutions.viettel.vn
                        </div>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span><b> ĐỊA CHỈ CỦA ĐƠN VỊ THU THẬP, QUẢN LÝ THÔNG TIN VÀ HỖ TRỢ KHÁCH HÀNG</b> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                      <div style="text-align: justify">
                          – Công ty/Tổ chức: Tổng công ty Giải pháp doanh nghiệp Viettel.
                          <br>
                          – Địa chỉ: Số 1 đường Trần Hữu Dực, Phường Mỹ Đình 2, Quận Nam Từ Liêm, Hà Nội, Việt Nam
                      </div>
                    </div>
                  </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span><b> PHƯƠNG TIỆN VÀ CÔNG CỤ QUẢN LÝ THÔNG TIN KHÁCH HÀNG </b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                        <div style="text-align: justify">
                          – Thành viên có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của mình bằng cách đăng nhập vào tài khoản và chỉnh sửa thông tin cá nhân hoặc yêu cầu solutions.viettel.vn thực hiện việc này.
                          <br>
                          – Thành viên có quyền gửi khiếu nại về người bán đến Ban quản trị của website solutions.viettel.vn tại địa chỉ nêu trên. Khi tiếp nhận những phản hồi này, solutions.viettel.vn sẽ xác nhận lại thông tin
                        </div>
                    </div>
                  </li>
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed"><span>06</span><b> CAM KẾT BẢO MẬT THÔNG TIN CÁ NHÂN KHÁCH HÀNG</b> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                        <div style="text-align: justify">
                          Thông tin cá nhân của Thành viên trên solutions.viettel.vn được cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân của solutions.viettel.vn. Việc thu thập và sử dụng thông tin của mỗi Thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác.
                          <br>
                          – Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về thông tin cá nhân của Thành viên khi không có sự cho phép đồng ý từ Thành viên.
                          <br>
                          – Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân Thành viên web solutions.viettel.vn sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho Thành viên được biết.
                          <br>
                          – Ban quản trị solutions.viettel.vn yêu cầu các cá nhân khi đăng ký/mua hàng là Thành viên, phải cung cấp đầy đủ thông tin cá nhân có liên quan như: họ và tên, địa chỉ liên lạc, email, số chứng minh nhân dân, điện thoại, …., và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản trị solutions.viettel.vn không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của Thành viên đó nếu xét thấy tất cả thông tin cá nhân của Thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.
                          <br>
                          – Ban quản lý website sử dụng công nghệ bảo mật thông tin khác nhau như: chuẩn quốc tế PCI, SSL,… nhằm bảo vệ thông tin này không bị truy lục, sử dụng hoặc tiết lộ ngoài ý muốn. Tuy nhiên không một dữ liệu nào có thể được bảo mật 100%. Do vậy, Ban quản lý không thể cam kết bảo mật một cách tuyệt đối an toàn và Ban quản lý không thể chịu trách nhiệm trong trường hợp có sự truy cập trái phép thông tin cá nhân của khách hàng như các trường hợp khách hàng tự ý chia sẻ thông tin với người khác….
                          <br>
                          – Ban quản lý khuyến cáo khách hàng bảo mật các thông tin liên quan đến mật khẩu truy xuất của khách hàng và không nên chia sẻ với bất kỳ người nào khác.
                          <br>
                          – Nếu sử dụng máy tính chung nhiều người, khách hàng nên đăng xuất, hoặc thoát hết tất cả cửa sổ Website đang mở.
                          <br>
                          – Khách hàng cũng có thể truy cập và chỉnh sửa những thông tin cá nhân của mình theo các liên kết (website’s links) thích hợp mà Ban quản lý cung cấp.
                          <br>
                          – Nếu khách hàng có thắc mắc về thông tin cá nhân có thể lên hệ trực tiếp tới số điện thoại chăm sóc khách hàng website cung cấp hoặc gửi mail về hòm mail của website.
                          <br>
                          Chính sách bảo mật này có hiệu lực từ ngày 01/06/2018.
                        </div>
                    </div>
                  </li>
  
                </ul>
              </div>
  
            </div>
  
            {{-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          </div> --}}
  
        </div>
    </section>

</main><!-- End #main -->

@endsection
       