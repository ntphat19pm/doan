@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

    <!-- <a href="{{route('dichvu_chuyendoi.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm dich vụ chuyển đổi số</a>  -->
    <button type="button" class="btn btn-outline-secondary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-plus-circle"></i>
        Thêm dịch vụ chuyển đổi số
    </button>

    <form action="{{route('dichvu_chuyendoi.store')}}" method="post" class="needs-validation" novalidate>
      @csrf
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">DỊCH VỤ CHUYỂN DỔI SỐ</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
              <div class="form-group invalid">
                <label for="ten_dichvu" class="form-label">Tên dịch vụ</label>
                <input type="text" class="form-control" name="ten_dichvu" id="ten_dichvu" autocomplete="off" required >
              </div>
              <div class="form-group">
                <label for="avatar">Hình ảnh <span class="text-danger font-weight-bold">*</span></label>
                <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
              </div>
              <div class="form-group invalid mt-3">
                <label for="chitiet" class="form-label">Mô tả chi tiết</label>
                <textarea class="form-control" name="chitiet" id="chitiet" cols="10" rows="5"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Thêm dịch vụ chuyển đổi số</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>

<div class="row">
@foreach ($data as $item) 
    <div class="col-lg-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          DỊCH VỤ {{$item->id}}
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
              <h3> {{$item->ten_dichvu}}</h3>
              <hr>
              {!!$item->chitiet!!}
          </div>
          </div>
          <div class="card-footer clearfix">
              <a href="{{route('dichvu_chuyendoi.edit',$item->id)}}" type="button" class="btn btn-success float-right"><i class="fas fa-edit"></i> Sửa</a>
              <a href="{{route('danhmuc_chuyendoi.destroy',$item->id)}}" type="button" class="btn btn-danger float-left"><i class="fas fa-trash"></i> Xóa</a>
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
