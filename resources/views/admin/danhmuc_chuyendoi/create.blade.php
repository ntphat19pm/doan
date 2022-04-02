@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('danhmuc_chuyendoi.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('danhmuc_chuyendoi.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về bảng danh mục</i>     
              </a>
            </div>

            <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="avatar">Hình ảnh <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                  </div>

                  <div class="form-group">
                        <label for="phanloai_id">Phân loại<span class="text-danger font-weight-bold">*</span></label>
                        <select id="phanloai_id" class="form-control custom-select @error('phanloai_id') is-invalid @enderror" name="phanloai_id" required autofocus>
                            <option value="">--Chọn phân loại--</option>
                            <option value="0">Chức năng</option>
                            <option value="1">Lĩnh vực</option>
                            
                        </select>
                      </div>
                </div>
    
                <div class="col-lg-8">
                  
                  <div class="form-group invalid">
                    <label for="ten_danhmuc" class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" name="ten_danhmuc" id="ten_danhmuc" autocomplete="off" required >
                  </div>
                  
                    <div class="form-group invalid">
                        <label for="chitiet" class="form-label">Chi tiết</label>
                        <textarea class="form-control is-invalid" name="chitiet" id="chitiet" cols="10" rows="1" required></textarea>
                    </div>
                </div>
                  
            </div>
            
          </form>
    </div>
</div>

@endsection

@section('js')
<script>
  $('#tags').tagsinput({
    tagClass: 'label label-warning'
});
</script>
@endsection
