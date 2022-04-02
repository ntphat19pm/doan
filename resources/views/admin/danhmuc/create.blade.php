@extends('layouts.admin')
@section('main')
<div class="card" >
 
    <div class="card-body">
        <form class="mb-3 needs-validation" action="{{route('danhmuc.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                    <label for="avatar">Hình ảnh đại diện <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                </div>
              </div>

              <div class="col-lg-3">
                <div class="form-group">
                  <label for="anhbia">Hình ảnh bìa <span class="text-danger font-weight-bold">*</span></label>
                  <input id="file_uploads1" type="file" class="form-control @error('anhbia') is-invalid @enderror" name="file_uploads1" value="{{ old('file_uploads1') }}" required autocomplete="file_uploads1" />
                </div>
              </div>

              <div class="col-lg-3">
                <div class="form-group">
                  <label for="tendanhmuc" class="form-label">Nhập tên danh mục</label>
                  <input id="tendanhmuc" type="text" class="form-control" name="tendanhmuc" autocomplete="off" placeholder="Nhập danh mục" required>
                  <span class="form-message"></span>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="form-group">
                  <label for="linhvuc_id">Lĩnh vực<span class="text-danger font-weight-bold">*</span></label>
                  <select id="linhvuc_id" class="form-control custom-select @error('linhvuc_id') is-invalid @enderror" name="linhvuc_id" required autofocus>
                      <option value="">--Chọn lĩnh vực--</option>
                      <option value="0">Lĩnh vực</option>
                      <option value="1">Dịch vụ</option>
                      
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
