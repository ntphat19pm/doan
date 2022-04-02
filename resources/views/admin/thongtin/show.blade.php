@extends('layouts.admin')
@section('main')

<div class="row">

  <div class="col-lg-4">
    <div class="">
      <a href="{{route('thongtin.index')}}" class="btn btn-sm btn-danger mb-3">
        <i class="fas fa-sign-out-alt"> Quay về danh sách các thông tin</i>     
      </a>
    </div>
  </div>
</div>
    <div class="card" >

      
    
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THÔNG TIN KHÁCH HÀNG</h4></b></p>
            {{-- <p><b><h6 class="text-center" style="color:rgb(255, 67, 67)">Mã hóa đơn: HD{{$data->id}}</h6></b></p> --}}
            {{-- <input type="date" style="color:rgb(255, 67, 67)" value="{{$data->ngaydathang}}" class="text-left" id="ngaydathang" name="ngaydathang" readonly> --}}
            
            <tr>
              <th class="text-center" scope="col">Tên khách hàng</th>
              <th class="text-center" scope="col">Số điện thoại</th>
              <th class="text-center" scope="col">Email</th>
              <th class="text-center" scope="col">Địa chỉ</th>
              <th class="text-center" scope="col">Hình thức liên hệ</th>
              <th class="text-center" scope="col">Yêu cầu</th>

            </tr>
          </thead>
          <tbody>

            <tr>
                <td class="text-center">{{$data->hoten}}</td>       
                <td class="text-center">{{$data->sdt}}</td>      
                <td class="text-center">{{$data->email}}</td>      
                <td class="text-center">{{$data->diachi}}</td>      
                <td class="text-center">
                    @if($data->hinhthuc==0)
                    Gọi điện
                    @elseif($data->hinhthuc==1)
                    SMS
                    @elseif($data->hinhthuc==2)
                    Zalo
                    @elseif($data->hinhthuc==3)
                    Email
                    @endif
                </td>
                <td class="text-center">
                    @if($data->yeucau_id==0)
                    Phản ánh sản phẩm dịch vụ
                    @elseif($data->yeucau_id==1)
                    Tư vấn sản phẩm dịch vụ
                    @endif
                </td>           
            </tr>
          </tbody>
        </table>
        <form action="{{route('thongtin.update',$data->id)}}" method="POST">
        @csrf @method('PUT')
          <div class="row mt-3">
            <div class="col-lg-4">
              <div class="form-group">
                <select id="trangthai" class="form-control custom-select @error('trangthai') is-invalid @enderror" name="trangthai" required disabled>
                  <option value="0" {{($data->trangthai== 0)?'selected':'' }}>Trạng thái chưa liên hệ</option>
                  <option value="1" {{($data->trangthai== 1)?'selected':'' }}>Trạng thái đã liên hệ</option>
                </select>
              </div>
            </div>
            {{-- @if($data->trangthai==0)
                <a href="{{ route('thongtin.active',$data->id)}}"><i style="color: red" class="far fa-times-circle fa-lg"></i><br>Chưa liên hệ</a>
              @elseif($data->trangthai==1)
                <a href="{{ route('thongtin.unactive',$data->id)}}"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i><br>Đã liên hệ</a>
              @endif --}}
            {{-- <button type="submit" class="btn btn-outline-success mb-3">
              <i class="fas fa-check-circle"></i>
            </button> --}}
          </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-chart-bar mr-1"></i>
                    YÊU CẦU TƯ VẤN CHI TIẾT
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
                
                <div class="" id="collapseExample1">
                    <div class="card-body">
                    <div class="tab-content p-0 h-100">
                    {{$data->noidung}}
                    <hr>
                    @if($data->nhanvien_id=="")
                      Chưa có nhân viên liên hệ
                      @else
                      <i class="fa fa-user"></i> Nhân viên liên hệ: {{$data->nhanvien->hovaten}}
                    @endif
                    </div>
                    </div>
                    <div class="card-footer clearfix">
                      @if($data->trangthai==0)
                      <a href="{{ route('thongtin.active',$data->id)}}" class="float-left"><i style="color: red" class="far fa-times-circle fa-lg"></i></a>
                      @elseif($data->trangthai==1)
                      <a href="{{ route('thongtin.unactive',$data->id)}}" class="float-left"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i> {{date("d-m-Y H:i:s",strtotime($data->ngay_lienhe))}}</a>
                      @endif
                      
                      
                    </div>
                </div>
            </div>
            <form method="POST" action="" id="form-delete">
              @csrf @method('DELETE')
            <form>
        </div>
    </div>

    <hr>
    <br>
    
    <div class="card" >
    
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <p><b>
                <h3 class="text-center" style="color:rgb(37, 59, 255) ">THÔNG TIN SẢN PHẨM TƯ VẤN</h3>
              </b></p>
              <tr>
                <th class="text-center" scope="col">Tên sản phẩm</th>
                <th class="text-center" scope="col">Danh mục sản phẩm</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($sanpham as $item)
                  <tr>
                    <td class="text-center">{{$item->tensp}}</td>
                    <td class="text-center">{{$item->danhmuc->tendanhmuc}}</td>
                    
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
{{-- <div class="pagination justify-content-center">{{$data->appends(request()->all())->links()}}</div> --}}
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

@endsection
