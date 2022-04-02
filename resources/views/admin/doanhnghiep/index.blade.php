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

      <a href="{{route('doanhnghiep.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm doanh nghiệp</a>
    </div>

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Tên doanh nghiệp</th>
              <th class="text-center" scope="col">Loại doanh nghiệp</th>
              <th class="text-center" scope="col">Hình ảnh</th>
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
                <td>{{$item->ten_kh}}</td>            
                <td>
                    @if($item->loai_kh==0)
                    Doanh nghiệp
                    @elseif($item->loai_kh==1)
                    Chính phủ
                    @endif
                </td>            
                <td>
                  <img src="{{url('public/uploads/doanhnghiep')}}/{{$item->hinhanh}}" width="30px">
                </td>            
              <td class="text-right">
                <a href="{{route('doanhnghiep.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                <a  href="{{route('doanhnghiep.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
