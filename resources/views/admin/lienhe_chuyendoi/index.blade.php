@extends('layouts.admin')
@section('main')

<div class="row">
@foreach ($data as $item) 
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-chart-bar mr-1"></i>
                KHÁCH HÀNG {{$item->id}}
                </h3>
                <div class="card-tools">
                <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample{{$item->id}}" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
                
                </div>
            </div>
            
            <div class="collapse" id="collapseExample{{$item->id}}">
                <div class="card-body">
                <div class="tab-content p-0 h-100">
                    Họ tên: {{$item->hoten_lienhe}} ({{$item->congty_lienhe}})
                    <br>Số điện thoại: {{$item->sdt_lienhe}}
                    <br>Email: {{$item->email_lienhe}}
                    <br>Lĩnh vực quan tâm: {{$item->danhmuc_chuyendoi->ten_danhmuc}}
                    <br>Nhân viên liên hệ: 
                    @if($item->nhanvien_id=="")
                    Chưa có nhân viên liên hệ
                    @else
                    {{$item->nhanvien->hovaten}}
                    @endif
                    <hr>
                    Chi tiết mô tả: {!!$item->chitiet!!}
                </div>
                </div>
                <div class="card-footer clearfix">
                    @if($item->trangthai_id==0)
                    <a href="{{ route('lienhe_chuyendoi.active',$item->id)}}" class="float-left"><i style="color: red" class="far fa-times-circle fa-lg"></i></a>
                    @elseif($item->trangthai_id==1)
                    <a href="{{ route('lienhe_chuyendoi.unactive',$item->id)}}" class="float-left"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i> {{date("d-m-Y H:i:s",strtotime($item->create_at))}}</a>
                    @endif
                   <a href="{{route('lienhe_chuyendoi.destroy',$item->id)}}" type="button" class="btn btn-danger btndelete float-right"><i class="fas fa-trash"></i> Xóa</a>
                </div>
            </div>
        </div>
        <form method="POST" action="" id="form-delete">
          @csrf @method('DELETE')
        <form>
    </div>
@endforeach
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
