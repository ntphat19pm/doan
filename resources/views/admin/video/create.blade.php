@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('video.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về bảng video</i>     
              </a>
            </div>

            <div class="row">

              <div class="col-lg-6">
                <div class="form-group invalid">
                    <label for="tenvideo" class="form-label">Tên video</label>
                    <input type="text" class="form-control" name="tenvideo" id="tenvideo" autocomplete="off" required >
                  </div>
              </div>
  
              <div class="col-lg-6">
                <div class="form-group invalid">
                    <label for="link" class="form-label">Đường dẫn</label>
                    <input type="text" class="form-control" name="link" id="link" required >
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label for="mota" class="form-label">Mô tả</label>
                  <textarea class="form-control" name="mota" id="mota" cols="10" rows="1"></textarea>
                  <div class="invalid-feedback"></div>
              </div>
              </div>
                
            </div>

            
          </form>
    </div>
</div>

@endsection
