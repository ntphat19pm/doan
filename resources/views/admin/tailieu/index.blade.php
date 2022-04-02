@extends('layouts.admin')
@section('main')

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

      <a href="{{route('tailieu.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm tài liệu</a> 
    </div>
    

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Tên tài liệu</th>
              <th class="text-center" width="17%" scope="col">File</th>
              <th class="text-center" width="11%" scope="col">Loại file</th>
              <th class="text-right" width="12%" scope="col">Action</th>
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
              <td>{{$item->ten_tailieu}}</td>            
              <td>{{$item->file}}</td>
              <td class="text-center">
                @if($item->loai_file==1)
                <img src="{{url('public/uploads/tailieu')}}/file.png" width="30px" class="mr-2">File PDF
                @elseif($item->loai_file==2)
                <img src="{{url('public/uploads/tailieu')}}/word.png" width="30px" class="mr-2">File Word
                @elseif($item->loai_file==3)
                <img src="{{url('public/uploads/tailieu')}}/excel.png" width="30px" class="mr-2">File Excel
                @elseif($item->loai_file==4)
                <img src="{{url('public/uploads/tailieu')}}/powerpoint.png" width="30px" class="mr-2">File PowePoint
                @elseif($item->loai_file==5)
                <img src="{{url('public/uploads/tailieu')}}/document.png" width="30px" class="mr-2">File Khác
                @endif
              </td>              
              <td class="text-right">
                <a target="_blank" href="{{url('public/uploads/tailieu')}}/{{$item->file}}" class="btn btn-sm btn-outline-info"><i class="fa fa-download"></i></a>
                <a href="{{route('tailieu.edit',$item->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>              
                  </a> 
                <a  href="{{route('tailieu.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
