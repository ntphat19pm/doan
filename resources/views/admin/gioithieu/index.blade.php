@extends('layouts.admin')
@section('main')
<p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THÔNG TIN LIÊN HỆ</h4></b></p>
<div class="card" >
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Mô tả giới thiệu</th>
            <th class="text-right" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td>{!!$item->noidung!!}</td>
            
            <td class="text-right">
              <a href="{{route('gioithieu.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
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
