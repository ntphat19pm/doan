@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('dichvu_chuyendoi.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('dichvu_chuyendoi.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng danh mục</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">
    
                <div class="col-lg-4">
                  
                  <div class="form-group">
                    <img class="rounded mx-auto d-block mb-2" src="{{url('public/uploads/dichvu_chuyendoi')}}/{{$data->avatar}}"  width="100%"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="avatar" />
                  </div>
                </div>
                <div class="col-lg-8">
                  
                  <div class="form-group invalid">
                    <label for="ten_dichvu" class="form-label">Tên dich vụ chuyển đổi số</label>
                    <input type="text" value="{{$data->ten_dichvu}}" class="form-control" name="ten_dichvu" autocomplete="off" id="ten_dichvu" required >
                  </div>

                  <div class="form-group invalid">
                    <label for="chitiet" class="form-label">Chi tiết</label>
                    <textarea type="text" class="form-control" name="chitiet" id="chitiet" required >{{$data->chitiet}}</textarea>
                  </div>
                </div>

                
                  
              </div>
            
          </form>
    </div>
</div>

@endsection