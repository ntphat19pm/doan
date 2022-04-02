@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('loiich.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('loiich.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">  
                <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="tenloiich" class="form-label">Nhập tên lợi ích</label>
                        <input type="text" class="form-control" name="tenloiich" id="tenloiich" autocomplete="off" required >
                    </div>


                    <div class="form-group">
                        <label for="sanpham_id">Sản phẩm<span class="text-danger font-weight-bold">*</span></label>
                        <select id="sanpham_id" class="form-control custom-select @error('sanpham_id') is-invalid @enderror" name="sanpham_id" required autofocus>
                            <option value="">--Chọn danh mục sản phẩm--</option>
                            @foreach($sanpham as $value)
                                <option value="{{ $value->id }}">{{ $value->tensp}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="chitiet" class="form-label">Chi tiết</label>
                        <textarea class="form-control" name="chitiet" id="chitiet" cols="10" rows="1"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
          </form>
    </div>
</div>

@endsection