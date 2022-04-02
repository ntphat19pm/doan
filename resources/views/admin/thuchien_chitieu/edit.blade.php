@extends('layouts.admin')
@section('main')
<div class="card">
    <div class="card-body">
        <form action="{{route('thuchien_chitieu.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf  @method('PUT')
            <div class="form-group">
                <a href="{{route('thuchien_chitieu.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng khuyến mãi</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>
            <div class="row">
                <div class="col-lg-2">  
                    <label for="doanhthu_dichvu" class="form-label">Doanh thu dịch vụ</label>
                    <input type="number" value="{{$data->doanhthu_dichvu}}" class="form-control" id="doanhthu_dichvu" name="doanhthu_dichvu" onblur="calcular();" readonly required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="doanhthu_tong" class="form-label">Tổng doanh thu</label>
                    <input type="number" value="{{$data->doanhthu_tong}}" class="form-control" id="doanhthu_tong" name="doanhthu_tong" onblur="calcular1();" readonly required>
                </div>
               
                <div class="col-lg-2"> 
                    <label for="duan" class="form-label">Doanh thu dự án</label>
                    <input type="number" value="{{$data->duan}}" class="form-control" id="duan" name="duan" onblur="calcular2();" readonly required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="giaoduc" class="form-label">Doanh thu giáo dục</label>
                    <input type="number" value="{{$data->giaoduc}}" class="form-control" id="giaoduc" name="giaoduc" onblur="calcular3();" readonly required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="kenhtruyen" class="form-label">Doanh thu kênh truyền</label>
                    <input type="number" value="{{$data->kenhtruyen}}" class="form-control" id="kenhtruyen" name="kenhtruyen" onblur="calcular4();" readonly required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="yte" class="form-label">Doanh thu y tế</label>
                    <input type="number" value="{{$data->yte}}" class="form-control" id="yte" name="yte" onblur="calcular5();" readonly required>
                </div>
                 
            </div>       
          </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="row">
                <div class="col-lg-2">  
                    <label for="nhap_doanhthu_dichvu" class="form-label">Doanh thu dịch vụ</label>
                    <input type="number" value="0" class="form-control" id="nhap_doanhthu_dichvu" name="nhap_doanhthu_dichvu" onblur="calcular();" required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="nhap_doanhthu_tong" class="form-label">Tổng doanh thu</label>
                    <input type="number" value="0" class="form-control" id="nhap_doanhthu_tong" name="nhap_doanhthu_tong" onblur="calcular1();"  required>
                </div>
               
                <div class="col-lg-2"> 
                    <label for="nhap_duan" class="form-label">Doanh thu dự án</label>
                    <input type="number" value="0" class="form-control" id="nhap_duan" name="nhap_duan" onblur="calcular2();" required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="nhap_giaoduc" class="form-label">Doanh thu giáo dục</label>
                    <input type="number" value="0" class="form-control" id="nhap_giaoduc" name="nhap_giaoduc" onblur="calcular3();" required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="nhap_kenhtruyen" class="form-label">Doanh thu kênh truyền</label>
                    <input type="number" value="0" class="form-control" id="nhap_kenhtruyen" name="nhap_kenhtruyen" onblur="calcular4();" required>
                </div>
                
                <div class="col-lg-2"> 
                    <label for="nhap_yte" class="form-label">Doanh thu y tế</label>
                    <input type="number" value="0" class="form-control" id="nhap_yte" name="nhap_yte" onblur="calcular5();" required>
                </div>
                 
            </div>       
          </form>
    </div>
</div>

@endsection

@section('js')
<script>
    function calcular() {
        var doanhthu_dichvu = parseInt(document.getElementById('doanhthu_dichvu').value, 10);
        var nhap_doanhthu_dichvu = parseInt(document.getElementById('nhap_doanhthu_dichvu').value, 10);
        document.getElementById('doanhthu_dichvu').value = doanhthu_dichvu + nhap_doanhthu_dichvu;
    }
    function calcular1() {
        var doanhthu_tong = parseInt(document.getElementById('doanhthu_tong').value, 10);
        var nhap_doanhthu_tong = parseInt(document.getElementById('nhap_doanhthu_tong').value, 10);
        document.getElementById('doanhthu_tong').value = doanhthu_tong + nhap_doanhthu_tong;
    }
    function calcular2() {
        var duan = parseInt(document.getElementById('duan').value, 10);
        var nhap_duan = parseInt(document.getElementById('nhap_duan').value, 10);
        document.getElementById('duan').value = duan + nhap_duan;
    }
    function calcular3() {
        var giaoduc = parseInt(document.getElementById('giaoduc').value, 10);
        var nhap_giaoduc = parseInt(document.getElementById('nhap_giaoduc').value, 10);
        document.getElementById('giaoduc').value = giaoduc + nhap_giaoduc;
    }
    function calcular4() {
        var kenhtruyen = parseInt(document.getElementById('kenhtruyen').value, 10);
        var nhap_kenhtruyen = parseInt(document.getElementById('nhap_kenhtruyen').value, 10);
        document.getElementById('kenhtruyen').value = kenhtruyen + nhap_kenhtruyen;
    }
    function calcular5() {
        var yte = parseInt(document.getElementById('yte').value, 10);
        var nhap_yte = parseInt(document.getElementById('nhap_yte').value, 10);
        document.getElementById('yte').value = yte + nhap_yte;
    }
</script>
@endsection
