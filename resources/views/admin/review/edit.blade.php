@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('review.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('review.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng review</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">
    
                <div class="col-lg-4">
                  
                  <div class="form-group">
                    <img class="rounded mx-auto d-block mb-2" src="{{url('public/uploads/review')}}/{{$data->avatar}}"  width="100%"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="avatar" />
                  </div>
                </div>
                <div class="col-lg-8">
                  
                  <div class="form-group invalid">
                    <label for="ten_reviewer" class="form-label">Tên dich vụ chuyển đổi số</label>
                    <input type="text" value="{{$data->ten_reviewer}}" class="form-control" name="ten_reviewer" id="ten_reviewer" autocomplete="off" required >
                  </div>
                  <div class="form-group invalid">
                    <label for="noicongtac" class="form-label">Nơi công tác</label>
                    <input type="text" value="{{$data->noicongtac}}" class="form-control" name="noicongtac" id="noicongtac" autocomplete="off" required >
                  </div>

                  <div class="form-group invalid">
                    <label for="noidung" class="form-label">Nhận xét chi tiết</label>
                    <textarea type="text" class="form-control" name="noidung" id="noidung" required >{{$data->noidung}}</textarea>
                  </div>
                </div>

                
                  
              </div>
            
          </form>
    </div>
</div>

@endsection