@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('tailieu.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('tailieu.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về bảng tài liệu</i>     
              </a>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="file">File tài liệu <span class="text-danger font-weight-bold">*</span></label>
                        <input id="file_uploads" type="file" class="form-control @error('file') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="ten_tailieu" class="form-label">Nhập tên tài liệu</label>
                        <input type="text" class="form-control" name="ten_tailieu" id="ten_tailieu" autocomplete="off" required >
                    </div>
                    
                </div>       
    
                <div class="col-lg-4">
                  
                    <div class="form-group">
                        <label for="loai_file">Loại file<span class="text-danger font-weight-bold">*</span></label>
                        <select id="loai_file" class="form-control custom-select @error('loai_file') is-invalid @enderror" name="loai_file" required autofocus>
                            <option value="">--Chọn loại file--</option>
                            <option value="1">File PDF</option>
                            <option value="2">File Word</option>
                            <option value="3">File Excel</option>
                            <option value="4">File PowerPoint</option>
                            <option value="5">File Khác</option>
                        </select>
                    </div>

                </div>
                  
            </div>
              
            
          </form>
    </div>
</div>

@endsection
