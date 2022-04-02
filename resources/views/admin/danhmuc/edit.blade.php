@extends('layouts.admin')
@section('main')
<div class="card">
    <div class="card-body">
        <form action="{{route('danhmuc.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf  @method('PUT')
          <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <img class="rounded mx-auto d-block" src="{{url('public/uploads/linhvuc')}}/{{$data->avatar}}"  width="300px"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="hinhanh" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <img class="rounded mx-auto d-block" src="{{url('public/uploads/linhvuc')}}/{{$data->anhbia}}"  width="300px"/>
                    <input id="file_uploads1" type="file" class="form-control @error('file_uploads1') is-invalid @enderror" name="file_uploads1" value="{{ $data->anhbia }}" autocomplete="hinhanh" />
                </div>
            </div>  
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="tendanhmuc" class="form-label">nhập tên danh mục</label>
                  <input value="{{$data->tendanhmuc}}" type="text" class="form-control" name="tendanhmuc" id="tendanhmuc" autocomplete="off" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="linhvuc_id">Lĩnh vực<span class="text-danger font-weight-bold">*</span></label>
                  <select id="linhvuc_id" class="form-control custom-select @error('linhvuc_id') is-invalid @enderror" name="linhvuc_id" required autofocus>
                    <option value="0" {{($data->linhvuc_id== 0)?'selected':'' }}>Lĩnh vực</option>
                    <option value="1" {{($data->linhvuc_id== 1)?'selected':'' }}>Dịch vụ</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="link_video" class="form-label">Nhập link video</label>
                  <input value="https://youtu.be/{{$data->link_video}}" type="text" class="form-control" name="link_video" id="link_video" >
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
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
