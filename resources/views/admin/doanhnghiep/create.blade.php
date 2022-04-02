@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('doanhnghiep.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('doanhnghiep.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về</i>     
              </a>
            </div>

            <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="hinhanh">Hình ảnh <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('hinhanh') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                  </div>
                </div>
    
                <div class="col-lg-4">
                  
                  <div class="form-group invalid">
                    <label for="ten_kh" class="form-label">Tên doanh nghiệp</label>
                    <input type="text" class="form-control" name="ten_kh" id="ten_kh" autocomplete="off" required >
                  </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="loai_kh">Loại khách hàng<span class="text-danger font-weight-bold">*</span></label>
                        <select id="loai_kh" class="form-control custom-select @error('loai_kh') is-invalid @enderror" name="loai_kh" required autofocus>
                            <option value="">--Chọn loại khách hàng--</option>
                            <option value="0">Doanh nghiệp</option>
                            <option value="1">Chính phủ</option>
                            
                        </select>
                    </div>
                </div>             
              </div>            
          </form>
    </div>
</div>

@endsection
