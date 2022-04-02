@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <!-- <a href="{{route('dichvu_chuyendoi.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm dich vụ chuyển đổi số</a>  -->
    <button type="button" class="btn btn-outline-secondary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-plus-circle"></i>
        Thêm review
    </button>

    <form action="{{route('review.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
      @csrf
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">NHẬP REVIEW TỪ ĐỐI TÁC</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="avatar">Hình ảnh <span class="text-danger font-weight-bold">*</span></label>
                            <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group invalid">
                                <label for="ten_reviewer" class="form-label">Tên đối tác</label>
                                <input type="text" class="form-control" name="ten_reviewer" id="ten_reviewer" autocomplete="off" required >
                            </div>
                            <div class="form-group invalid">
                                <label for="noicongtac" class="form-label">Nơi công tác</label>
                                <input type="text" class="form-control" name="noicongtac" id="noicongtac" autocomplete="off" required >
                            </div>
                        </div>

                        <div class="form-group invalid mt-3">
                            <label for="noidung" class="form-label">Nhận xét chi tiết</label>
                            <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="5"></textarea>
                        </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Thêm review</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>

<div class="row">
@foreach ($data as $item) 
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-chart-bar mr-1"></i>
                {{$item->ten_reviewer}}
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
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{url('public/uploads/review')}}/{{$item->avatar}}" width="100%">
                            </div>
                            <div class="col-lg-8">
                                <b style="font-size:25px"> {{$item->ten_reviewer}}</b>
                                <br> {{$item->noicongtac}}
                                <hr>
                                <span style="display: -webkit-box;
                                line-height: 25px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                -webkit-line-clamp: 3;
                                -webkit-box-orient: vertical; font-size:15px">{!!$item->noidung!!}</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="card-footer clearfix">
                   <a href="{{route('review.edit',$item->id)}}" type="button" class="btn btn-success float-right"><i class="fas fa-edit"></i> Sửa</a>
                   <a href="{{route('review.destroy',$item->id)}}" type="button" class="btn btn-danger float-left"><i class="fas fa-trash"></i> Xóa</a>
                </div>
            </div>
        </div>
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
