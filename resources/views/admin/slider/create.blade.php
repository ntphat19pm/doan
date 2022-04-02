@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('slider.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="avatar">Hình ảnh slider <span class="text-danger font-weight-bold">*</span></label>
                        <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                        @error('file_uploads')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="form-group invalid">
                        <label for="ten_slider" class="form-label">Nhập tên slider</label>
                        <input type="text" class="form-control" name="ten_slider" id="ten_slider" required >
                    </div>
                    
                </div>
          </form>
    </div>
</div>

@endsection