@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('doanhnghiep.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('doanhnghiep.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng khách hàng</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <img class="rounded mx-auto d-block mb-2" src="{{url('public/uploads/doanhnghiep')}}/{{$data->hinhanh}}"  width="200px"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="avatar" />
                  </div>
                </div>
    
                <div class="col-lg-4">
                  
                  <div class="form-group invalid">
                    <label for="ten_kh" class="form-label">Tên khách hàng</label>
                    <input type="text" value="{{$data->ten_kh}}" class="form-control" name="ten_kh" id="ten_kh" autocomplete="off" required >
                  </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="loai_kh">Status<span class="text-danger font-weight-bold">*</span></label>
                        <select id="loai_kh" class="form-control custom-select @error('loai_kh') is-invalid @enderror" name="loai_kh" required autofocus>
                            <option value="0" {{($data->loai_kh== 0)?'selected':'' }}>Doanh nghiệp</option>
                            <option value="1" {{($data->loai_kh== 1)?'selected':'' }}>Chính phủ</option>
                        </select>
                    </div>
                </div>
            </div>            
          </form>
    </div>
</div>

@endsection
