@extends('layouts.admin')
@section('main')
    <div class="card-body">
        <form action="{{route('chuongtrinh.update',$data->id)}}" method="POST" class="needs-validation" novalidate>
            @csrf @method('PUT')
            <div class="form-group">
                <a href="{{route('chuongtrinh.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng chương trình</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
            </div>
            
              <div class="row">
                <div class="col-lg-2">  
                <div class="form-group">
                    <label for="thang_id">Tháng<span class="text-danger font-weight-bold">*</span></label>
                    <select id="thang_id" class="form-control custom-select @error('thang_id') is-invalid @enderror" name="thang_id" required autofocus>
                        <option value="">--Chọn tháng--</option>
                        @foreach($thang as $value)
                        <option value="{{ $value->id }}" {{($data->thang_id== $value->id)?'selected':'' }}>{{$value->tenthang}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="col-lg-6">  
                    <label for="ten_chuongtrinh" class="form-label">Tên chương trình</label>
                    <input type="text" value="{{$data->ten_chuongtrinh}}" class="form-control" id="ten_chuongtrinh" name="ten_chuongtrinh" required>
                </div>
                <div class="col-lg-2"> 
                    <label for="kehoach" class="form-label">Kế hoạch</label>
                    <input type="number" value="{{$data->kehoach}}" class="form-control" id="kehoach" name="kehoach" required>
                </div>
                <div class="col-lg-2"> 
                    <label for="tytrong" class="form-label">Tỷ trọng</label>
                    <input type="number" value="{{$data->tytrong}}" class="form-control" id="tytrong" name="tytrong" required>
                </div>
                <div class="col-lg-2" hidden> 
                    <label for="thuchien" class="form-label">Thực hiện</label>
                    <input type="number" value="{{$data->thuchien}}" class="form-control" id="thuchien" name="thuchien" readonly required>
                </div>          
            </div>

          </form>

    </div>

@endsection
@section('js')
<script>
    function calcular() {
        var thuchien = parseInt(document.getElementById('thuchien').value, 10);
        var nhap_thuchien = parseInt(document.getElementById('nhap_thuchien').value, 10);
        document.getElementById('thuchien').value = thuchien + nhap_thuchien;
    }
</script>
@endsection
