@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('sanpham.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('sanpham.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="anh">Hình ảnh sản phẩm <span class="text-danger font-weight-bold">*</span></label>
                        <input id="file_uploads" type="file" class="form-control @error('anh') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                        @error('file_uploads')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
    
                <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="tensp" class="form-label">Nhập tên sản phẩm</label>
                        <input type="text" class="form-control" name="tensp" id="tensp" onblur="ChangeToSlug();" autocomplete="off" required >
                    </div>

                    <div class="form-group invalid" hidden>
                        <label for="slug" class="form-label">Sản phẩm Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" required readonly>
                    </div>
                    <div class="form-group invalid">
                        <label for="link_pdf" class="form-label">Link tài liệu</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="link_pdf" id="link_pdf" aria-describedby="button-addon2"> 
                            <a href="https://drive.google.com/drive/folders/1Ba-aNQFZzfqiDLM6aoBpkK-IO6z8dDwS?usp=sharing" target="_blank" class="btn btn-outline-warning" id="button-addon2"><i class="fa fa-folder-open"></i></a>
                        </div>
                    </div>
                    
                </div>
                
    
                
    
                <div class="col-lg-4">                    
                    <div class="form-group">
                        <label for="link">Link youtube <span class="text-danger font-weight-bold">*</span></label>
                        <input type="text" class="form-control" name="link" id="link" >
                    </div>
                    
                    <div class="form-group">
                        <label for="danhmuc_id">Danh mục<span class="text-danger font-weight-bold">*</span></label>
                        <select id="danhmuc_id" class="form-control custom-select @error('danhmuc_id') is-invalid @enderror" name="danhmuc_id" required autofocus>
                            <option value="">--Chọn danh mục sản phẩm--</option>
                            @foreach($danhmuc as $value)
                                <option value="{{ $value->id }}">{{ $value->tendanhmuc}}</option>
                            @endforeach
                        </select>
                        @error('phanloai_id')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-4">
    
                    <div class="form-group">
                        <label for="anh1">Hình ảnh kèm theo <span class="text-danger font-weight-bold">*</span></label>
                        <input id="file_uploads1" type="file" class="form-control @error('anh1') is-invalid @enderror" name="file_uploads1" value="{{ old('file_uploads1') }}" required autocomplete="file_uploads1" />
                        @error('file_uploads1')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
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

@section('js')
<script>
    function ChangeToSlug()
    {
        var tensp, slug;
    
        //Lấy text từ thẻ input title 
        tensp = document.getElementById("tensp").value;
    
        //Đổi chữ hoa thành chữ thường
        slug = tensp.toLowerCase();
    
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
@endsection