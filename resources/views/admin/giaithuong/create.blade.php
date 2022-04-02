@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('giaithuong.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('giaithuong.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng giải thưởng</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="avatar">Hình ảnh <span class="text-danger font-weight-bold">*</span></label>
                        <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" autocomplete="file_uploads" />
                        @error('file_uploads')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="form-group invalid">
                        <label for="ten_giaithuong" class="form-label">Nhập tên giải thưởng</label>
                        <input type="text" class="form-control" name="ten_giaithuong" id="ten_giaithuong" required >
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phanloai_id">Loại giải thưởng<span class="text-danger font-weight-bold">*</span></label>
                                <select id="phanloai_id" class="form-control custom-select @error('phanloai_id') is-invalid @enderror" name="phanloai_id" required autofocus>
                                    <option value="">--Chọn loại giải thưởng--</option>
                                    <option value="0">Giải thưởng trong nước</option>
                                    <option value="1">Giải thưởng quốc tế - Giải Vàng</option>
                                    <option value="2">Giải thưởng quốc tế - Giải Bạc</option>
                                    <option value="3">Giải thưởng quốc tế - Giải Đồng</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group invalid">
                                <label for="nam" class="form-label">Nhập năm giải thưởng</label>
                                <input type="number" class="form-control" name="nam" id="nam" required >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="chitiet" class="form-label">Chi tiết</label>
                        <textarea class="form-control" name="chitiet" id="chitiet" cols="10" rows="1"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
          </form>
    </div>
</div>

@endsection