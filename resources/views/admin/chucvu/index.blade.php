@extends('layouts.admin')
@section('main')

<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

  <a href="{{route('chucvu.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm chức vụ</a>
  
</div>


<div class="card" >
 
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên chức vụ</th>
            <th class="text-center" scope="col">Số lượng nhân viên</th>
            <th class="text-right" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->tenchucvu}}</td>
            <td class="text-center">{{$item->product->count()}}</td>
            @if(Auth::user()->chucvu_id==3)
            <td class="text-right">
              <a href="{{route('chucvu.edit',$item->id)}}" class="btn btn-sm btn-success disabled">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('chucvu.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete disabled">
                <i class="fas fa-trash"></i>
              </a>
            </td>
            @elseif(Auth::user()->chucvu_id==1)
            <td class="text-right">
              <a href="{{route('chucvu.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('chucvu.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                <i class="fas fa-trash"></i>
              </a>
            </td>
            @endif
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
