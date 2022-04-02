@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('giaoviec.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('giaoviec.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng giao việc</i>     
                </a>
            </div>
            <div class="row">  
                <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="ten_congviec" class="form-label">Nhập tên công việc</label>
                        <input type="text" class="form-control" name="ten_congviec" id="ten_congviec" autocomplete="off" required >
                    </div>                    
                </div>
                <div class="col-lg-4">  
                    <label for="hanchot" class="form-label">Hạn chót</label>
                    <input type="date" class="form-control" id="hanchot" name="hanchot" required>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="nguoinhan">Nhân viên phụ trách<span class="text-danger font-weight-bold">*</span></label>
                        <select id="nguoinhan" class="form-control custom-select @error('nguoinhan') is-invalid @enderror" name="nguoinhan" required autofocus>
                            <option value="">--Chọn nhân viên phụ trách--</option>
                            @foreach($nhanvien as $value)
                                <option value="{{ $value->id }}">{{ $value->hovaten}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
          </form>
    </div>
</div>

@endsection