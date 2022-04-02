@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

  <a href="{{route('giaithuong.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm giải thưởng</a> 
  {{-- <a href="{{ route('sanpham.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-file-download"></i> Xuất ra Excel</a>
  <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-file-upload"></i> Nhập Excel</button> --}}
</div> 
<p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">QUẢN LÝ CÁC GIẢI THƯỞNG</h4></b></p>
<div class="card" >
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên giải thưởng</th>
            <th scope="col">Loại giải thưởng</th>
            <th scope="col">Năm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Chi tiết</th>
            <th class="text-right" width="10%" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->ten_giaithuong}}</td>
            <td>
              @if($item->phanloai_id==0)
              Giải thưởng trong nước
              @elseif($item->phanloai_id==1)
              Giải thưởng quốc tế - Giải Vàng
              @elseif($item->phanloai_id==2)
              Giải thưởng quốc tế - Giải Bạc
              @elseif($item->phanloai_id==3)
              Giải thưởng quốc tế - Giải Đồng
              @endif
            </td>
            <td>{{$item->nam}}</td>
            <td><img src="{{url('public/uploads/giaithuong')}}/{{$item->avatar}}" width="100px"></td>
            <td>{{$item->chitiet}}</td>
            {{-- <td>{{$item->link}}</td> --}}
            
            <td class="text-right">
              {{-- <a href="{{route('khuyenmai.show',$item->id)}}" class="btn btn-sm btn-warning">
                <i class="fas fa-eye"></i>              
              </a> --}}
              <a href="{{route('giaithuong.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('giaithuong.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
