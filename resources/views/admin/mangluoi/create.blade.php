@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('mangluoi.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('mangluoi.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng mạng lưới</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="avatar">Hình ảnh<span class="text-danger font-weight-bold">*</span></label>
                        <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                        @error('file_uploads')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
    
                <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="ten_mangluoi" class="form-label">Nhập tên mạng lưới</label>
                        <input type="text" class="form-control" name="ten_mangluoi" id="ten_mangluoi" required >
                    </div>
                    
                </div>

                <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="link" class="form-label">Nhập đường dẫn liên kết</label>
                        <input type="text" class="form-control" name="link" id="link" required >
                    </div>
                    
                </div>
          </form>
    </div>
</div>

@endsection