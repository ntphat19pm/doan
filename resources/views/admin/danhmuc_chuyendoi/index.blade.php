@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

  <a href="{{route('danhmuc_chuyendoi.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm danh mục chuyển đổi số</a> 
</div> 
<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-bar mr-1"></i>
      QUẢN LÝ DANH MỤC CHUYỂN ĐỔI SỐ
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
              <th scope="col">Tên danh mục</th>
              <th scope="col">Phân loại</th>
              <th scope="col">Ảnh đại diện</th>
              <th scope="col">Chi tiết</th>
              <th class="text-right" width="10%" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->ten_danhmuc}}</td>
              <td>
                @if ($item->phanloai_id==1)
                    Lĩnh vực   
                @elseif($item->phanloai_id==0)
                    Chức năng
                @endif
              </td>
              <td><img src="{{url('public/uploads/danhmuc_chuyendoi')}}/{{$item->avatar}}" width="100px"></td>
              <td>{!!$item->chitiet!!}</td>
              <td class="text-right">
                <a href="{{route('danhmuc_chuyendoi.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                <a  href="{{route('danhmuc_chuyendoi.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                  <i class="fas fa-trash"></i>
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
