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
    </div>

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Tên người bình luận</th>
              <th class="text-center" scope="col">Tên bài viết</th>
              <th class="text-center" scope="col">Nội dung bình luận</th>
              <th class="text-center" scope="col">Trạng thái</th>
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
              <td>{{$item->hoten}}</td>            
              <td>{{$item->baiviet->tenbai}}</td>            
              <td>{{$item->noidung}}</td>                      
              <td>
                @if($item->trangthai==0)
                <a href="{{ route('binhluan.active',$item->id)}}"><i style="color: red" class="far fa-times-circle fa-lg"></i></a>
                @elseif($item->trangthai==1)
                  <a href="{{ route('binhluan.unactive',$item->id)}}"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i></a>
                @endif  
              </td>            
              <td class="text-right">
                <a  href="{{route('binhluan.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
