@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

  <a href="{{route('video.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm video</a> 
</div>
<p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">QUẢN LÝ CÁC VIDEO</h4></b></p>
<div class="card" >
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">Tên video</th>
            <th class="text-center" scope="col">Video</th>
            <th class="text-center" scope="col">Người đăng</th>
            <th class="text-center" scope="col">Trạng thái</th>
            <th class="text-center" width="10%" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td class="text-center">{{$item->id}}</td>
            <td class="text-center">{{$item->tenvideo}}</td>
            <td class="text-center"><iframe width="300" height="169" src="https://www.youtube.com/embed/{{$item->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
            {{-- <td>{{$item->link}}</td> --}}
            <td class="text-center">{{$item->nhanvien->hovaten}}</td>
            <td class="text-center">
              @if($item->status==0)
                <a href="{{ route('video.active',$item->id)}}"><i style="color: red" class="far fa-times-circle fa-lg"></i></a>
              @elseif($item->status==1)
                <a href="{{ route('video.unactive',$item->id)}}"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i></a>
              @endif
            </td>
            
            <td class="text-center">
              {{-- <a href="{{route('khuyenmai.show',$item->id)}}" class="btn btn-sm btn-warning">
                <i class="fas fa-eye"></i>              
              </a> --}}
              <a href="{{route('video.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('video.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
