@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

  <a href="{{route('danhmuc.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm danh mục</a> 
  {{-- <a href="{{ route('sanpham.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-file-download"></i> Xuất ra Excel</a>
  <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-file-upload"></i> Nhập Excel</button> --}}
</div> 

<div class="card" >
 
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">Tên lĩnh vực</th>
            <th scope="col">Số lượng sản phẩm</th>
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
            <td>{{$item->tendanhmuc}}</td>
            <td>
              @if($item->linhvuc_id==0)
              Lĩnh vực
              @elseif($item->linhvuc_id==1)
              Dịch vụ
              @endif
            </td>
            <td>{{$item->product->count()}}</td>
            
            <td class="text-right">
              <a href="{{route('danhmuc.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('danhmuc.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
