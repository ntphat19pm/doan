@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('nop_file.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('nop_file.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về bảng khuyến mãi</i>     
              </a>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="file">File cần nộp <span class="text-danger font-weight-bold">*</span></label>
                        <input id="file_uploads" type="file" class="form-control @error('file') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                    </div>
                </div>
    
                <div class="col-lg-6">
                  
                    <div class="form-group">
                        <label for="congviec_id">Công việc<span class="text-danger font-weight-bold">*</span></label>
                        <select id="congviec_id" class="form-control custom-select @error('congviec_id') is-invalid @enderror" name="congviec_id" required autofocus>
                            <option value="">--Chọn công việc cần nộp--</option>
                            @foreach($giaoviec as $value)
                                <option value="{{ $value->id }}">{{ $value->ten_congviec}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                  
            </div>
              
            
          </form>
    </div>
</div>

@endsection
