@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('doitac.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('doitac.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về</i>     
              </a>
            </div>

            <div class="row">

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="hinhanh">Hình ảnh <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('hinhanh') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                    <div class="invalid-tooltip">
                      Bạn chưa chọn hình ảnh đối tác.
                    </div>
                  </div>
                </div>
    
                <div class="col-lg-6">
                  
                  <div class="form-group invalid">
                    <label for="ten_doitac" class="form-label">Tên đối tác</label>
                    <input type="text" class="form-control" name="ten_doitac" id="ten_doitac" autocomplete="off" required>
                    <div class="invalid-tooltip">
                      Bạn chưa nhập tên đối tác.
                    </div>
                  </div>
                </div>           
              </div>            
          </form>
    </div>
</div>

@endsection
