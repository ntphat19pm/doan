@extends('layouts.admin')
@section('main')

<div class="row">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU DỊCH VỤ
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
     
      <div class="collapse" id="collapseExample">
        <div class="card-body">
          <div class="tab-content p-0">
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                <div id="chart_doanhthudichvu" style="height: 300px;"></div>
              </div>
              
          </div>
          <b style="color: springgreen">Điểm đạt được: {{number_format($diem_dv,2)}}</b>
        </div> 
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ TỔNG DOANH THU
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
     
      <div class="collapse" id="collapseExample1">
        <div class="card-body">
            <div class="tab-content p-0">
            
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div id="chart_tongdoanhthu" style="height: 300px;"></div>
                </div>
            </div>
            <b style="color: springgreen">Điểm đạt được: {{number_format($diem_tong,2)}}</b>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU DỰ ÁN
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
     
      <div class="collapse" id="collapseExample2">
        <div class="card-body">
            <div class="tab-content p-0">
            
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div id="chart_duan" style="height: 300px;"></div>
                </div>
            </div>
            <b style="color: springgreen">Điểm đạt được: {{number_format($diem_da,2)}}</b>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU KÊNH TRUYỀN
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
     
      <div class="collapse" id="collapseExample3">
        <div class="card-body">
            <div class="tab-content p-0">
            
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div id="chartkenhtruyen" style="height: 300px;"></div>
                </div>
            </div>
            <b style="color: springgreen">Điểm đạt được: {{number_format($diem_kt,2)}}</b>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU GIÁO DỤC
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
     
      <div class="collapse" id="collapseExample4">
        <div class="card-body">
            <div class="tab-content p-0">
            
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div id="chartgiaoduc" style="height: 300px;"></div>
                </div>
            </div>
            <b style="color: springgreen">Điểm đạt được: {{number_format($diem_gd,2)}}</b>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU Y TẾ
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
     
      <div class="collapse" id="collapseExample5">
        <div class="card-body">
            <div class="tab-content p-0">
            
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div id="chart" style="height: 300px;"></div>
                </div>
            </div>
            <b style="color: springgreen">Điểm đạt được: {{number_format($diem_yt,2)}}</b>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
        <i class="fas fa-chart-bar mr-1"></i>
          CHƯƠNG TRÌNH HÀNH ĐỘNG
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
     
      <div class="collapse" id="collapseExample6">
        <div class="card-body">
            <div class="btn-group" style="float: right;">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Chọn tháng
              </button>
              <ul class="dropdown-menu">
                  @if(!empty($thang))
                      @foreach($thang as $item)
                  <li><a class="dropdown-item" href="{{route('home.showchuongtrinh',$item->id)}}">{{$item->tenthang}}</a></li>
                      @endforeach
                  @endif
              </ul>
            </div>
            <table id="example11" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center" scope="col">ID</th>
                  <th class="text-center" scope="col">Tên chương trình hành động</th>
                  <th class="text-center" scope="col">Phần trăm thực hiện</th>
                  <th class="text-center" scope="col">Điểm</th>
                  <th class="text-center" scope="col">Thanh tiến độ</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($showchuongtrinh))
                  @foreach($showchuongtrinh as $value)
                    <tr>
                      <th>{{ $loop->iteration }}</th>
                      <td class="text-center">{{$value->ten_chuongtrinh}}</td>
                      <td class="text-center">{{number_format(($value->thuchien/$value->kehoach)*100,2)}}/100%</td>
                      <td class="text-center">
                        @if(($value->thuchien/$value->kehoach)*100==0)
                        Chưa hoàn thành
                        @elseif(($value->thuchien/$value->kehoach)*100<70)
                        1 điểm
                        @elseif(($value->thuchien/$value->kehoach)*100<90)
                        2 điểm
                        @elseif(($value->thuchien/$value->kehoach)*100==90)
                        3 điểm
                        @elseif(($value->thuchien/$value->kehoach)*100<110)
                        4 điểm
                        @else
                        5 điểm
                        @endif
                      </td>
                      <td class="text-center">
                        {{-- <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{$value->thuchien}}" aria-valuemin="0" aria-valuemax="{{$value->kehoach}}" style="width:{{number_format(($value->thuchien/$value->kehoach)*100,2)}}%">
                            {{number_format(($value->thuchien/$value->kehoach)*100,2)}}%
                          </div>
                        </div> --}}
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="{{$value->thuchien}}" aria-valuemin="0" aria-valuemax="{{$value->kehoach}}" style="width:{{number_format(($value->thuchien/$value->kehoach)*100,2)}}%">{{number_format(($value->thuchien/$value->kehoach)*100,2)}}%</div>
                          
                        </div>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
            <form method="POST" action="" id="form-delete">
              @csrf @method('DELETE')
            <form>
          </div> 
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-chart-bar mr-1"></i>
            CÁC THÔNG TIN TƯ VẤN GIẢI PHÁP
        </h3>
        <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
          
        </div>
      </div>
      
      <div class="collapse" id="collapseExample7">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Họ tên khách hàng</th>
                  <th scope="col">Hình thức liên hệ</th>
                  <th scope="col">Yêu cầu</th>
                  <th scope="col">Trạng thái</th>
                  <th class="text-right" scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @php 
                  $i = 0;
                  @endphp
                  @foreach ($thongtin as $item)
                  @php 
                  $i++;
                  @endphp
                  <tr>
                  <td class="text-center"><i>{{$i}}</i></td>
                  <td>{{$item->hoten}}</td>
                  <td>
                      @if($item->hinhthuc==0)
                      Gọi điện
                      @elseif($item->hinhthuc==1)
                      SMS
                      @elseif($item->hinhthuc==2)
                      Zalo
                      @elseif($item->hinhthuc==3)
                      Email
                      @endif
                  </td>
                  <td>
                      @if($item->yeucau_id==0)
                      Phản ánh sản phẩm dịch vụ
                      @elseif($item->yeucau_id==1)
                      Tư vấn sản phẩm dịch vụ
                      @endif
                  </td>
                  <td class="text-center">
                      @if($item->trangthai==0)
                      <a href="{{ route('thongtin.active',$item->id)}}"><i style="color: red" class="far fa-times-circle fa-lg"></i><br>Chưa liên hệ</a>
                      @elseif($item->trangthai==1)
                      <a href="{{ route('thongtin.unactive',$item->id)}}"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i><br>Đã liên hệ</a>
                      @endif
                  </td>
                  
                  <td class="text-right">
                      <a href="{{route('thongtin.show',$item->id)}}" class="btn btn-sm btn-warning">
                          <i class="fas fa-eye"></i>              
                          </a>
                      <a  href="{{route('thongtin.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                          <i class="fas fa-trash"></i>
                      </a>
                  </td>
              
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <form method="POST" action="" id="form-delete">
            @csrf @method('DELETE')
            <form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-bar mr-1"></i>
            CÁC THÔNG TIN TƯ VẤN CHUYỂN ĐỔI SỐ
          </h3>
          <div class="card-tools">
            <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample9" aria-expanded="false" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        
        <div class="collapse" id="collapseExample9">
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Họ tên khách hàng</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Email</th>
                  <th scope="col">Công ty</th>
                  <th scope="col">Lĩnh vực</th>
                  <th scope="col">Chi tiết</th>
                  <th class="text-right" scope="col">Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                @php 
                $i = 0;
                @endphp
                @foreach ($lienhe_chuyendoi as $item)
                @php 
                $i++;
                @endphp
                <tr>
                  <td class="text-center"><i>{{$i}}</i></td>
                  <td>{{$item->hoten_lienhe}}</td>
                  <td>{{$item->sdt_lienhe}}</td>
                  <td>{{$item->email_lienhe}}</td>
                  <td>{{$item->congty_lienhe}}</td>
                  <td>{{$item->danhmuc_chuyendoi->ten_danhmuc}}</td>
                  <td>{{$item->chitiet}}</td>
                  <td class="text-center">
                    @if($item->trangthai_id==0)
                    <a href="{{ route('lienhe_chuyendoi.active',$item->id)}}" class="float-left"><i style="color: red" class="far fa-times-circle fa-lg"></i></a>
                    @elseif($item->trangthai_id==1)
                    <a href="{{ route('lienhe_chuyendoi.unactive',$item->id)}}" class="float-left"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i> {{date("d-m-Y H:i:s",strtotime($item->create_at))}}</a>
                    @endif
                  </td>            
                </tr>
                @endforeach
              </tbody>
            </table>
            <form method="POST" action="" id="form-delete">
            @csrf @method('DELETE')
            <form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              THỐNG KÊ TRUY CẬP
          </h3>
          <div class="card-tools">
            <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
            
          </div>
        </div>
      
        <div class="collapse" id="collapseExample8">
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                  <th scope="col">Tổng tháng trước</th>
                  <th scope="col">Tổng tháng này</th>
                  <th scope="col">Tổng một năm</th>
                  <th scope="col">Tổng truy cập</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>         
                  <td class="text-center"><i>{{$visitor_lastmonth_count}}</i></td>           
                  <td class="text-center"><i>{{$visitor_thismonth_count}}</i></td>           
                  <td class="text-center"><i>{{$visitor_year_count}}</i></td>           
                  <td class="text-center"><i>{{$vistors_total}}</i></td>           
                  </tr>
              </tbody>
            </table>
            <form method="POST" action="" id="form-delete">
            @csrf @method('DELETE')
            <form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




  
  
  
  

@endsection
@section('js')
<script>
  $('.btndelete').click(function(ev){
    ev.preventDefault();
    var _href=$(this).attr('href');
    $('form#form-delete').attr('action',_href);
   if(confirm('bạn có chắc muốn xóa nó không?')){
      $('form#form-delete').submit();
   }
    
  })


</script>


<script>

const chart_doanhthudichvu = new Chartisan({
    el: '#chart_doanhthudichvu',
    url: "@chart('doanh_thu_dich_vu_chart')",
    hooks: new ChartisanHooks()
      .colors(['#2E8364', '#0487D9','#F24444'])
      .responsive()
      .beginAtZero()
      .legend({ position: 'bottom'})
});
const chart_tongdoanhthu = new Chartisan({
    el: '#chart_tongdoanhthu',
    url: "@chart('tong_doanh_thu_chart')",
    hooks: new ChartisanHooks()
      .colors(['#2E8364', '#0487D9','#F24444'])
      .responsive()
      .beginAtZero()
      .legend({ position: 'bottom'})
});
const chart_duan = new Chartisan({
    el: '#chart_duan',
    url: "@chart('du_an_chart')",
    hooks: new ChartisanHooks()
      .colors(['#2E8364', '#0487D9','#F24444'])
      .responsive()
      .beginAtZero()
      .legend({ position: 'bottom'})
});
const chartkenhtruyen = new Chartisan({
    el: '#chartkenhtruyen',
    url: "@chart('kenh_truyen_chart')",
    hooks: new ChartisanHooks()
      .colors(['#2E8364', '#0487D9','#F24444'])
      .responsive()
      .beginAtZero()
      .legend({ position: 'bottom'})
});
const chartgiaoduc = new Chartisan({
    el: '#chartgiaoduc',
    url: "@chart('giao_duc_chart')",
    hooks: new ChartisanHooks()
      .colors(['#2E8364', '#0487D9','#F24444'])
      .responsive()
      .beginAtZero()
      .legend({ position: 'bottom'})
});
const chart = new Chartisan({
    el: '#chart',
    url: "@chart('y_te_chart')",
    hooks: new ChartisanHooks()
      .colors(['#2E8364', '#0487D9','#F24444'])
      .responsive()
      .beginAtZero()
      .legend({ position: 'bottom'})
});

</script>

@endsection