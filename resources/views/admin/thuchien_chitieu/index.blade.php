@extends('layouts.admin')
@section('main')


    {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

      <a href="{{route('thuchien_chitieu.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm thực hiện chỉ tiêu</a> 
    </div> --}}

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Chỉ tiêu</th>
              <th class="text-center" scope="col">Doanh thu dịch vụ</th>
              <th class="text-center" scope="col">Tổng doanh thu</th>
              <th class="text-center" scope="col">Doanh thu dự án</th>
              <th class="text-center" scope="col">Doanh thu kênh truyền</th>
              <th class="text-center" scope="col">Doanh thu giáo dục</th>
              <th class="text-center" scope="col">Doanh thu y tế</th>
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
              <td>Chỉ tiêu {{$item->chitieu->thang->tenthang}}</td>
              <td>{{$item->doanhthu_dichvu}}</td>
              <td>{{$item->doanhthu_tong}}</td>
              <td>{{$item->duan}}</td>
              <td>{{$item->kenhtruyen}}</td>
              <td>{{$item->giaoduc}}</td>
              <td>{{$item->yte}}</td>
                          
              <td class="text-right">
                <a href="{{route('thuchien_chitieu.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                {{-- <a  href="{{route('thuchien_chitieu.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                  <i class="fas fa-trash"></i>
                </a> --}}
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
