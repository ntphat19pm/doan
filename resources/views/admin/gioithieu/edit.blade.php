@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('gioithieu.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
          <div class="form-group">
            <a href="{{route('lienhe.index')}}" class="btn btn-sm btn-danger mb-3">
                <i class="fas fa-sign-out-alt"> Quay về</i>     
            </a>

            <a>
              <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
          </a>
          </div>

            <div class="form-group">
                <label for="noidung" class="form-label">Mô tả chi tiết</label>
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="1">{{$data->noidung}}</textarea>
                <div class="invalid-feedback"></div>
            </div>

            <div class="row">
                

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="tram_hatang" class="form-label">Trạm hạ tầng số</label>
                        <input type="number" value="{{$data->tram_hatang}}" class="form-control" name="tram_hatang" id="tram_hatang" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="trungtam" class="form-label">Trung tâm dữ liệu</label>
                        <input type="number" value="{{$data->trungtam}}" class="form-control" name="trungtam" id="trungtam" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="capquang" class="form-label">Hạ tầng cáp quang</label>
                        <input type="number" value="{{$data->capquang}}" class="form-control" name="capquang" id="capquang" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="diem_giaodich" class="form-label">Điểm giao dịch</label>
                        <input type="number" value="{{$data->diem_giaodich}}" class="form-control" name="diem_giaodich" id="diem_giaodich" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="dieuhanh" class="form-label">Hệ thống điều hành</label>
                        <input type="text" value="{{$data->dieuhanh}}" class="form-control" name="dieuhanh" id="dieuhanh" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="diem_giaonhan" class="form-label">Điểm giao nhận</label>
                        <input type="number" value="{{$data->diem_giaonhan}}" class="form-control" name="diem_giaonhan" id="diem_giaonhan" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="canbo_nhanvien" class="form-label">Cán bộ nhân viên</label>
                        <input type="number" value="{{$data->canbo_nhanvien}}" class="form-control" name="canbo_nhanvien" id="canbo_nhanvien" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="chuyengia" class="form-label">Chuyên gia</label>
                        <input type="number" value="{{$data->chuyengia}}" class="form-control" name="chuyengia" id="chuyengia" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="giatri" class="form-label">Giá trị thương hiệu</label>
                        <input type="number" value="{{$data->giatri}}" class="form-control" name="giatri" id="giatri" required >
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group invalid">
                        <label for="chamsoc" class="form-label">Chăm sóc khách hàng</label>
                        <input type="text" value="{{$data->chamsoc}}" class="form-control" name="chamsoc" id="chamsoc" required >
                    </div>
                </div>

            </div>
            
        </form>
    </div>
</div>

@endsection
