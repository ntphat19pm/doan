@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
        <form action="{{route('chuongtrinh.store')}}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('chuongtrinh.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng chương trình</i>     
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6">
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
                <div class="col-lg-6">  
                    <label for="ten_chuongtrinh" class="form-label">Tên chương trình hành động</label>
                    <input type="text" class="form-control" id="ten_chuongtrinh" name="ten_chuongtrinh" autocomplete="off" required>
                </div>
                <div class="col-lg-6"> 
                    <label for="kehoach" class="form-label">Kế hoạch</label>
                    <input type="number" class="form-control" id="kehoach" name="kehoach" required>
                </div>
                <div class="col-lg-6"> 
                    <label for="tytrong" class="form-label">Tỷ trọng</label>
                    <input type="number" class="form-control" id="tytrong" name="tytrong" required>
                </div>   
            </div>

          </form>
    </div>
</div>

@endsection
