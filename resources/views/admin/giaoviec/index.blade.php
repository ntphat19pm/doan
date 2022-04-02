@extends('layouts.admin')
@section('main')
{{-- <form action="" class="form-inline">

  <div class="form-group ">
    <input class="form-control" name="tukhoa" placeholder="Nhập tên sản phẩm">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class ="fas fa-search"></i>
  </button>  
</form> --}}

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

      <a href="{{route('giaoviec.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm công việc</a> 
      {{-- <a href="{{ route('dacdiem.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-file-download"></i> Xuất ra Excel</a>
      <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-file-upload"></i> Nhập Excel</button> --}}
    </div>
    {{-- <form action="{{ route('dacdiem.nhap') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="modal fade" id="modal-secondary">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Nhập file Excel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-0">
                <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                <a href="{{url('public/uploads/file_nhap')}}/danh-sach-dac-diem.xlsx" class="btn btn-outline-info mt-3">Download file Excel</a>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-success">Upload file Excel</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </form> --}}

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Tên công việc</th>
              <th class="text-center" scope="col">Người phụ trách</th>
              <th class="text-center" scope="col">Hạn chót</th>
              <th class="text-center" scope="col">Ngày nộp</th>
              <th class="text-center" scope="col">Trạng thái</th>
              <th class="text-center" scope="col">Số lượng file</th>
              <th class="text-right" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php 
            $i = 0;
            @endphp
            @foreach ($data as $item)
            @php 
            $i++;
            @endphp
            <tr>
              <td class="text-center"><i>{{$i}}</i></td>
              <td>{{$item->ten_congviec}}</td>            
              <td>{{$item->nhanvien->hovaten}}</td>            
              <td>{{date("d-m-Y",strtotime($item->hanchot))}}</td>            
              <td>
                @if($item->ngaynop=="")
                Chưa nộp
                @else
                {{date("d-m-Y H:i:s",strtotime($item->ngaynop))}}
                @endif</td>            
              <td>
                @if($item->trangthai==0)
                <a href="{{ route('giaoviec.active',$item->id)}}"><i style="color: red" class="far fa-times-circle fa-lg"></i></a>
                @elseif($item->trangthai==1)
                  <a href="{{ route('giaoviec.unactive',$item->id)}}"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i></a>
                @endif
              </td>
              <td>
                @if($item->product->count()==0)
                Chưa nộp
                @else
                Đã nộp {{$item->product->count()}} file
                @endif
              </td>            
              <td class="text-right">
                <a href="{{route('giaoviec.show',$item->id)}}" class="btn btn-sm btn-warning">
                  <i class="fas fa-eye"></i>              
                </a>
                <a href="{{route('giaoviec.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                <a  href="{{route('giaoviec.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
    <hr>
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
