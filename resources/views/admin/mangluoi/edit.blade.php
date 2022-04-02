@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('mangluoi.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('mangluoi.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng mạng lưới</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <img class="rounded mx-auto d-block" src="{{url('public/uploads/mangluoi')}}/{{$data->avatar}}"  width="300px"/>
                        <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="hinhanh" />
                    </div>
                </div>
    
                <div class="col-lg-4">
                    <div class="form-group">
                    <label for="ten_mangluoi" class="form-label">Nhập tên mạng lưới</label>
                    <input type="text" value="{{$data->ten_mangluoi}}" class="form-control" name="ten_mangluoi" id="ten_mangluoi" required >
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                    <label for="link" class="form-label">Nhập đường dẫn liên kết</label>
                    <input type="text" value="{{$data->link}}" class="form-control" name="link" id="link" required >
                    </div>
                </div>
            </div>
          </form>
    </div>
</div>

@endsection