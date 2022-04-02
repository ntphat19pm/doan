@extends('layouts.admin')
@section('main')

<div class="row">

  <div class="col-lg-4">
    <div class="">
      <a href="{{route('giaoviec.index')}}" class="btn btn-sm btn-danger mb-3">
        <i class="fas fa-sign-out-alt"> Quay về danh sách giao việc</i>     
      </a>
    </div>
  </div>
</div>

    <div class="card" >

      
    
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THÔNG TIN CÔNG VIỆC</h4></b></p>
            {{-- <p><b><h6 class="text-center" style="color:rgb(255, 67, 67)">Mã hóa đơn: HD{{$data->id}}</h6></b></p> --}}
            {{-- <input type="date" style="color:rgb(255, 67, 67)" value="{{$data->ngaydathang}}" class="text-left" id="ngaydathang" name="ngaydathang" readonly> --}}
            
            <tr>
              <th class="text-center" scope="col">Tên công việc</th>
              <th class="text-center" scope="col">Người nhận</th>
              <th class="text-center" scope="col">Hạn chót</th>
              <th class="text-center" scope="col">Ngày nộp</th>
              <th class="text-center" scope="col">Trạng thái nộp</th>

            </tr>
          </thead>
          <tbody>

            <tr>
                <td class="text-center">{{$data->ten_congviec}}</td>
                <td class="text-center">{{$data->nhanvien->hovaten}}</td>          
                <td class="text-center">{{date("d-m-Y",strtotime($data->hanchot))}}</td>          
                <td class="text-center">
                    @if($data->ngaynop=="")
                    Chưa nộp
                    @else
                    {{date("d-m-Y H:i:s",strtotime($data->ngaynop))}}
                    @endif</td>      
                </td>
                <td class="text-center">
                    @if($data->ngaynop=="")
                    Chưa nộp
                    @elseif(date("d-m-Y",strtotime($data->ngaynop))<=date("d-m-Y",strtotime($data->hanchot)))
                    Nộp đúng hạn
                    @elseif(date("d-m-Y",strtotime($data->ngaynop))>date("d-m-Y",strtotime($data->hanchot)))
                    Nộp trễ hạn
                    @endif</td>      
                </td>              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <hr>
    <br>
    
    <div class="card" >
    
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <p><b>
                <h3 class="text-center" style="color:rgb(37, 59, 255) ">LIỆT KÊ FILE ĐÃ NỘP</h3>
              </b></p>
              <tr>
                <th class="text-center" scope="col">STT</th>
                <th class="text-center" scope="col">Tên file</th>
                <th class="text-center" scope="col">Thơi gian nộp</th>
                <th class="text-center" scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              @php 
              $i = 0;
              @endphp
              @foreach($nop_file as $item)
              @php 
              $i++;
              @endphp
                  <tr>
                    <td class="text-center"><i>{{$i}}</i></td>
                    <td class="text-center">{{$item->file}}</td>
                    <td class="text-center">{{date("d-m-Y H:i:s",strtotime($item->thoigian_nop))}}</td>
                    <td class="text-right">
                        <a href="{{url('public/uploads/giaoviec')}}/{{$item->file}}" class="btn btn-outline-info"><i class="fa fa-download"></i></a>
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
