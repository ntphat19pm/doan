@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('giaithuong.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('giaithuong.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng giải thưởng</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <img class="rounded mx-auto d-block" src="{{url('public/uploads/giaithuong')}}/{{$data->avatar}}"  width="150px"/>
                        <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="hinhanh" />
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="ten_giaithuong" class="form-label">Nhập tên slider</label>
                        <input type="text" value="{{$data->ten_giaithuong}}" class="form-control" name="ten_giaithuong" id="ten_giaithuong" required >
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phanloai_id">Loại giải thưởng<span class="text-danger font-weight-bold">*</span></label>
                                <select id="phanloai_id" class="form-control custom-select @error('phanloai_id') is-invalid @enderror" name="phanloai_id" required autofocus>
                                <option value="0" {{($data->phanloai_id== 0)?'selected':'' }}>Giải thưởng trong nước</option>
                                <option value="1" {{($data->phanloai_id== 1)?'selected':'' }}>Giải thưởng quốc tế - Giải Vàng</option>
                                <option value="2" {{($data->phanloai_id== 2)?'selected':'' }}>Giải thưởng quốc tế - Giải Bạc</option>
                                <option value="3" {{($data->phanloai_id== 3)?'selected':'' }}>Giải thưởng quốc tế - Giải Đồng</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group invalid">
                                <label for="nam" class="form-label">Nhập năm giải thưởng</label>
                                <input type="number" value="{{$data->nam}}" class="form-control" name="nam" id="nam" required >
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="chitiet" class="form-label">Chi tiết</label>
                    <textarea class="form-control" name="chitiet" id="chitiet" cols="10" rows="1">{{$data->chitiet}}</textarea>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
          </form>
    </div>
</div>

@endsection