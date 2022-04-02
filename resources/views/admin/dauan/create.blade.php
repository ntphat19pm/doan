@extends('layouts.admin')
@section('main')
<div class="card" >
 
    <div class="card-body">
        <form class="mb-3" action="{{route('dauan.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('dauan.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng dấu ấn</i>     
                </a>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="avatar">Hình ảnh đại diện <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" autocomplete="file_uploads" required />
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nam" class="form-label">Nhập năm dấu ấn</label>
                  <input id="nam" type="number" class="form-control" name="nam" placeholder="Nhập năm bằng số" required>
                  <span class="form-message"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="noidung" class="form-label">Nội dung</label>
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="1"></textarea>
                <div class="invalid-feedback"></div>
            </div>
          </form>
    </div>
</div>

@endsection
