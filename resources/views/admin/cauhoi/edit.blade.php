@extends('layouts.admin')
@section('main')
<div class="card">
    <div class="card-body">
        <form action="{{route('cauhoi.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf  @method('PUT')
            <div class="form-group">
                <a href="{{route('cauhoi.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng câu hỏi</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="hoten" class="form-label">Họ tên người đặt câu hỏi</label>
                        <input value="{{$data->hoten}}" type="text" class="form-control" name="hoten" id="hoten" readonly >
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input value="{{$data->sdt}}" type="text" class="form-control" name="sdt" id="sdt" readonly >
                    </div>
                </div>  
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="diachi" class="form-label">Địa chỉ</label>
                        <input value="{{$data->diachi}}" type="text" class="form-control" name="diachi" id="diachi" readonly >
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Địa chỉ mail</label>
                        <input value="{{$data->email}}" type="text" class="form-control" name="email" id="email" readonly >
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                    <label for="trangthai">Trạng thái câu hỏi<span class="text-danger font-weight-bold">*</span></label>
                    <select id="trangthai" class="form-control custom-select @error('linhvuc_id') is-invalid @enderror" name="trangthai" required autofocus>
                        <option value="0" {{($data->trangthai== 0)?'selected':'' }}>Không duyệt</option>
                        <option value="1" {{($data->trangthai== 1)?'selected':'' }}>Đã duyệt</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="cauhoi" class="form-label">Câu hỏi</label>
                    <input value="{{$data->cauhoi}}" type="text" class="form-control" name="cauhoi" id="cauhoi" required>
                </div>
            </div>
          <div class="col-lg-12">
            <div class="form-group">
              <label for="traloi" class="form-label">Trả lời</label>
              <textarea class="form-control" name="traloi" id="traloi" cols="10" rows="1">{{$data->traloi}}</textarea>
              <div class="invalid-feedback"></div>
            </div>
          </div>
          </form>
    </div>
</div>

@endsection
