@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('doitac.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('doitac.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng đối tác</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">

                <div class="col-lg-6">
                  <div class="form-group">
                    <img class="rounded mx-auto d-block mb-2" src="{{url('public/uploads/doitac')}}/{{$data->hinhanh}}"  width="200px"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="avatar"/>
                  </div>
                </div>
    
                <div class="col-lg-6">
                  
                  <div class="form-group invalid">
                    <label for="ten_doitac" class="form-label">Tên bài</label>
                    <input type="text" value="{{$data->ten_doitac}}" class="form-control" name="ten_doitac" id="ten_doitac" id="validationCustom03" required >
                    <div class="invalid-tooltip">
                      Bạn chưa nhập tên đối tác.
                    </div>
                  </div>
                </div>
            </div>            
          </form>
    </div>
</div>

@endsection
