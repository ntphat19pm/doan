@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
        <form action="{{route('thuchien_chitieu.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('thuchien_chitieu.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng câu hỏi</i>     
                </a>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                    <label for="chitieu_id">Chỉ tiêu<span class="text-danger font-weight-bold">*</span></label>
                    <select id="chitieu_id" class="form-control custom-select @error('chitieu_id') is-invalid @enderror" name="chitieu_id" required autofocus>
                        <option value="">-- Chọn chỉ tiêu --</option>
                        @foreach($chitieu as $value)
                            <option value="{{$value->id }}">{{ $value->thang->tenthang }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-lg-3">  
                    <label for="doanhthu_dichvu" class="form-label">Doanh thu dịch vụ</label>
                    <input type="number" class="form-control" id="doanhthu_dichvu" name="doanhthu_dichvu" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="doanhthu_tong" class="form-label">Tổng doanh thu</label>
                    <input type="number" class="form-control" id="doanhthu_tong" name="doanhthu_tong" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="duan" class="form-label">Doanh thu dự án</label>
                    <input type="number" class="form-control" id="duan" name="duan" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="giaoduc" class="form-label">Doanh thu giáo dục</label>
                    <input type="number" class="form-control" id="giaoduc" name="giaoduc" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="kenhtruyen" class="form-label">Doanh thu kênh truyền</label>
                    <input type="number" class="form-control" id="kenhtruyen" name="kenhtruyen" required>
                </div>
                <div class="col-lg-3"> 
                    <label for="yte" class="form-label">Doanh thu y tế</label>
                    <input type="number" class="form-control" id="yte" name="yte" required>
                </div>           
            </div>

          </form>
    </div>
</div>

@endsection
