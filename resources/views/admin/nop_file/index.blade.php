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

      <a href="{{route('nop_file.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm file nộp</a> 
    </div>
    

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Tên công việc</th>
              <th class="text-center" scope="col">File</th>
              <th class="text-center" scope="col">Thời gian nộp</th>
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
              <td>{{$item->giaoviec->ten_congviec}}</td>            
              <td>{{$item->file}}</td>
              <td>
                {{date("d-m-Y H:i:s",strtotime($item->thoigian_nop))}}
              </td>              
              <td class="text-right">
                <a href="{{url('public/uploads/giaoviec')}}/{{$item->file}}" class="btn btn-outline-info"><i class="fa fa-download"></i></a>
                <a  href="{{route('nop_file.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
