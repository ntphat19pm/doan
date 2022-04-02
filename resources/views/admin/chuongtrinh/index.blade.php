@extends('layouts.admin')
@section('main')

  @if(Auth::user()->chucvu_id==1)
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

      <a href="{{route('chuongtrinh.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm chương trình</a> 
      <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-file-upload"></i> Nhập Excel</button>
    </div>
  
    <form action="{{ route('chuongtrinh.nhap') }}" method="post" enctype="multipart/form-data">
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
                <a href="{{url('public/uploads/file_nhap')}}/danh-sach-chuong-trinh.xlsx" class="btn btn-outline-info mt-3">Download file Excel</a>
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
    </form>
  @endif
    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Tháng</th>
              <th class="text-center" scope="col">Tên chương trình</th>
              <th class="text-center" scope="col">Kế hoạch</th>
              <th class="text-center" scope="col">Tỷ trọng</th>
              <th class="text-center" scope="col">Thực hiện</th>
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
              <td>{{$item->thang->tenthang}}</td>            
              <td>{{$item->ten_chuongtrinh}}</td>
              <td>{{$item->kehoach}}</td>
              <td>{{$item->tytrong}}</td>
              <td>{{$item->thuchien}}</td>
                          
              <td class="text-right">
                
                <a href="{{route('chuongtrinh.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                @if(Auth::user()->chucvu_id==1)
                <a href="{{route('chuongtrinh.show',$item->id)}}" class="btn btn-sm btn-warning">
                <i class="fa fa-toolbox"></i> 
                </a>
                <a  href="{{route('chuongtrinh.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                  <i class="fas fa-trash"></i>
                </a>
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
