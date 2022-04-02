@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
        <form action="{{route('chitieu.store')}}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('chitieu.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng chỉ tiêu</i>     
                </a>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                <label for="thang_id">Tháng<span class="text-danger font-weight-bold">*</span></label>
                <select id="thang_id" class="form-control custom-select @error('thang_id') is-invalid @enderror" name="thang_id" required autofocus>
                    <option value="">-- Chọn tháng --</option>
                    @foreach($thang as $value)
                        <option value="{{$value->id }}">{{ $value->tenthang }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">  
                    <label for="doanhthu_dichvu" class="form-label">Doanh thu dịch vụ</label>
                    <input type="number" class="form-control" id="doanhthu_dichvu" name="doanhthu_dichvu" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="tytrong_dichvu" class="form-label">Tỷ trọng doanh thu dịch vụ</label>
                    <input type="number" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="doanhthu_tong" class="form-label">Tổng doanh thu</label>
                    <input type="number" class="form-control" id="doanhthu_tong" name="doanhthu_tong" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="tytrong_tong" class="form-label">Tỷ trọng tổng doanh thu</label>
                    <input type="number" class="form-control" id="tytrong_tong" name="tytrong_tong" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="duan" class="form-label">Doanh thu dự án</label>
                    <input type="number" class="form-control" id="duan" name="duan" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="tytrong_duan" class="form-label">Tỷ trọng doanh thu dự án</label>
                    <input type="number" class="form-control" id="tytrong_duan" name="tytrong_duan" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="giaoduc" class="form-label">Doanh thu giáo dục</label>
                    <input type="number" class="form-control" id="giaoduc" name="giaoduc" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="tytrong_giaoduc" class="form-label">Tỷ trọng doanh thu giáo dục</label>
                    <input type="number" class="form-control" id="tytrong_giaoduc" name="tytrong_giaoduc" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="kenhtruyen" class="form-label">Doanh thu kênh truyền</label>
                    <input type="number" class="form-control" id="kenhtruyen" name="kenhtruyen" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="tytrong_kenhtruyen" class="form-label">Tỷ trọng doanh thu kênh truyền</label>
                    <input type="number" class="form-control" id="tytrong_kenhtruyen" name="tytrong_kenhtruyen" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="yte" class="form-label">Doanh thu y tế</label>
                    <input type="number" class="form-control" id="yte" name="yte" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="tytrong_yte" class="form-label">Tỷ trọng doanh thu y tế</label>
                    <input type="number" class="form-control" id="tytrong_yte" name="tytrong_yte" required>
                </div>            
            </div>
            
          </form>
    </div>
</div>

@endsection
