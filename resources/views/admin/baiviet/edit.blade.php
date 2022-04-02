@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('baiviet.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('baiviet.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng bài viết</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <img class="rounded mx-auto d-block mb-2" src="{{url('public/uploads/baiviet')}}/{{$data->avatar}}"  width="100%"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="avatar" />
                  </div>
                  <div class="row">

                    <!-- <div class="col-lg-6">
                      <div class="form-group invalid">
                        <label for="create_at" class="form-label">Ngày viết</label>
                        <input type="date" value="{{$data->create_at}}" class="form-control" name="create_at" id="create_at" required >
                      </div>
                    </div> -->
                    <div class="col-lg-6">
                      @if(Auth::user()->chucvu_id==1)
                      <div class="form-group">
                        <label for="trangthai">Status<span class="text-danger font-weight-bold">*</span></label>
                        <select id="trangthai" class="form-control custom-select @error('status') is-invalid @enderror" name="trangthai" required autofocus>
                            <option value="0" {{($data->trangthai== 0)?'selected':'' }}>Đã duyệt</option>
                            <option value="1" {{($data->trangthai== 1)?'selected':'' }}>Chưa duyệt</option>
                        </select>
                        @error('phanloai_id')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                      @endif
                    </div>
                  </div>

                  <!-- <div class="form-group invalid">
                    <label for="nguoidang" class="form-label">Người viết</label>
                    <input type="text" value="{{$data->nguoidang}}" class="form-control" name="nguoidang" id="nguoidang" required readonly >
                  </div> -->
                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="phanloai_id">Lĩnh vực<span class="text-danger font-weight-bold">*</span></label>
                        <select id="phanloai_id" class="form-control custom-select @error('phanloai_id') is-invalid @enderror" name="phanloai_id" required autofocus>
                          <option value="0" {{($data->phanloai_id== 0)?'selected':'' }}>Tin sự kiện</option>
                          <option value="1" {{($data->phanloai_id== 1)?'selected':'' }}>Tin công nghệ</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="binhluan_id">Cho phép bình luận<span class="text-danger font-weight-bold">*</span></label>
                        <select id="binhluan_id" class="form-control custom-select @error('binhluan_id') is-invalid @enderror" name="binhluan_id" required autofocus>
                          <option value="0" {{($data->binhluan_id== 0)?'selected':'' }}>Từ chối</option>
                          <option value="1" {{($data->binhluan_id== 1)?'selected':'' }}>Cho phép</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group invalid">
                    <label for="tags" class="form-label">Tags bài viết</label>
                    <input type="text" class="form-control" value="{{$data->tags}}" name="tags" id="tags" required >
                  </div>   
                </div>
    
                <div class="col-lg-8">
                  
                  <div class="form-group invalid">
                    <label for="tenbai" class="form-label">Tên bài</label>
                    <input type="text" value="{{$data->tenbai}}" class="form-control" name="tenbai" id="tenbai" required >
                  </div>
                  
                  <div class="form-group invalid">
                      <label for="mota" class="form-label">Mô tả</label>
                      <textarea type="text" class="form-control" name="mota" id="mota" required >{{$data->mota}}</textarea>
                  </div>
                </div>
                  
              </div>
              
            <div class="form-group">
                <label for="noidung" class="form-label">Nội dung</label>
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="1">{{$data->noidung}}</textarea>
                <div class="invalid-feedback"></div>
            </div>

            
          </form>
    </div>
</div>

@endsection

@section('js')
<script>
  $('#tags').tagsinput({
    tagClass: 'label label-warning'
});
</script>
@endsection