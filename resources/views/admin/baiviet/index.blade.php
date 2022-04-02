@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

  <a href="{{route('baiviet.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm bài viết</a> 
  {{-- <a href="{{ route('sanpham.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-file-download"></i> Xuất ra Excel</a>
  <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-file-upload"></i> Nhập Excel</button> --}}
</div> 
<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-bar mr-1"></i>
      QUẢN LÝ TẤT CẢ BÀI VIẾT
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
      <div class="tab-content p-0">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên bài viết</th>
              <th scope="col">Người viết</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Ảnh đại diện</th>
              <th class="text-right" width="10%" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->tenbai}}</td>
              <td>{{$item->nhanvien->hovaten}}</td>
              <td>
                @if ($item->trangthai==1)
                <span class="badge bg-navy">Chưa được duyệt</span>   
                @elseif($item->trangthai==0)
                <span class="badge bg-olive">Đã được duyệt</span>
                @endif
              </td>
              <td><img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" width="100px"></td>
              {{-- <td>{{$item->link}}</td> --}}
              
              <td class="text-right">
                {{-- <a href="{{route('khuyenmai.show',$item->id)}}" class="btn btn-sm btn-warning">
                  <i class="fas fa-eye"></i>              
                </a> --}}
                <a href="{{route('baiviet.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                @if(Auth::user()->chucvu_id==1)
                <a  href="{{route('baiviet.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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

@endsection
