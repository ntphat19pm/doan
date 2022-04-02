@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('slider.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('slider.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <img class="rounded mx-auto d-block" src="{{url('public/uploads/slider')}}/{{$data->avatar}}"  width="300px"/>
                        <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="hinhanh" />
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="form-group">
                    <label for="ten_slider" class="form-label">Nhập tên slider</label>
                    <input type="text" value="{{$data->ten_slider}}" class="form-control" name="ten_slider" id="ten_slider" required >
                    </div>
                </div>
            </div>
          </form>
    </div>
</div>

@endsection