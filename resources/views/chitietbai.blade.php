@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_tintuc.jpg'); background-size:1600px; height: 300px">

    <div class="container">
        <h1 class="text-center">
            TIN TỨC
        </h1>
    </div>

    
  
</section>

<main id="main">
    <div class="mt-5 mb-5">
        <div class="row">
            <div class="col-lg-1">
                
            </div>
            <div class="col-lg-10">
                <div class="text-center">
                    <p><b><h1 style="color:red; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{$data->tenbai}}</h1></b></p>
                    {{-- <div class="badge rounded-pill bg-warning ml-5 pull-center">{{date("d-m-Y",strtotime($data->create_at))}}</div> --}}
                </div>

                <div class="row">
                    <div class="col-lg-2">
                    </div>              
                    <div class="col-lg-8">
                        <p class="text-left"><i>Được viết bởi {{$data->nhanvien->hovaten}}
                            <br>Xuất bản: {{date("l, d-m-Y",strtotime($data->create_at))}}</i></p>
                        <p class="text-right">
                            <div class="zalo-share-button" data-href="" data-oaid="3623842424356090488" data-layout="1" data-color="blue" data-customize="false"></div>
                            <div class="fb-share-button" data-href="" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            
                            {{-- <div class="fb-like" data-href="" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div> --}}
                        </p>
                        <p class="text-left">
                            
                        </p>
                        <p><b><h5 style="color:rgb(0, 0, 0)">{!!$data->mota!!}</h5></b></p>
                        <hr>
                        <div style="text-align: center;">                
                            {!!$data->noidung!!}
                        </div>
                        <fieldset>
                            <legend>Tags bài viết</legend>
                            <p>
                                <i class="fa fa-tag"></i>
                                @php
                                    $tags=$data->tags;
                                    $tags= explode(",",$tags);
                                @endphp

                                @foreach($tags as $tag)
                                    <a style="background: rgb(78, 227, 253); color:white; margin: 1px 2px" href="{{route('home.tag',str_slug($tag))}}" clas="tags_style">{{$tag}}</a>
                                @endforeach
                            </p>
                        </fieldset>
                        <div class="zalo-share-button" data-href="" data-oaid="3623842424356090488" data-layout="1" data-color="blue" data-customize="false"></div>
                        <div class="fb-like" data-href="" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
                        <div class="fb-share-button" data-href="" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        {{-- <div class="fb-comments" data-href="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flien.nhu.946954%2Fposts%2F150722977206556&show_text=true&width=500" data-width="" data-numposts="5"></div> --}}
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                
            </div>
        </div>
        
    </div>
    <section id="services" class="services section-bg">
        <div class="container mb-5" data-aos="fade-up">
  
          <div class="section-title mt-5">
            <h2>BÌNH LUẬN</h2>
            
            <p>Có {{$binhluan->count()}} bình luận</p>

            @if($data->binhluan_id==1)
            <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                BÌNH LUẬN
            </button>
            @elseif($data->binhluan_id==0)
            <p>Hiện tại bài viết này đã tắt tính năng bình luận. </p>
            @endif
          </div>
  
          <div class="row">
            @foreach($binhluan as $item)
                <div class="col-lg-4 ">
                    <div class="icon-box">
                        <div class="row">
                            <div class="col-lg-4 ">
                                @if($item->avatar_id==1)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_01.png" class="img-fluid" alt="" style="width:100px">
                                    @elseif($item->avatar_id==2)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_02.png" class="img-fluid" alt="" style="width:100px">
                                    @elseif($item->avatar_id==3)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_03.png" class="img-fluid" alt="" style="width:100px">
                                    @elseif($item->avatar_id==4)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_04.png" class="img-fluid" alt="" style="width:100px">
                                    @elseif($item->avatar_id==5)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_05.png" class="img-fluid" alt="" style="width:100px">
                                    @elseif($item->avatar_id==6)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_06.png" class="img-fluid" alt="" style="width:100px">
                                    @elseif($item->avatar_id==7)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_07.png" class="img-fluid" alt="" style="width:100px">
                                    @elseif($item->avatar_id==8)
                                    <img src="{{url('public/uploads/binhluan')}}/avatar_08.png" class="img-fluid" alt="" style="width:100px">
                                    @endif 
                            </div>
                            <div class="col-lg-8 ">
                                <h5>{{$item->hoten}}</h5>
                                <hr>
                                <p>{!!$item->noidung!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <table id="example1" class="table table-hover">
                <tbody id="myTable">
                    @foreach($binhluan as $item)
                    <tr>
                        <td>
                            <img src="{{url('public/uploads/tailieu')}}/file.png" class="img-fluid" alt="" style="width:30px">
                            {{$item->hoten}}
                            <br>
                        </td>           
                    </tr>
                    @endforeach
                </tbody>
            </table>
   --}}
          </div>  
        </div>

        <form action="{{route('home.postbinhluan')}}" method="post">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">THÔNG TIN BÌNH LUẬN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
      
                    <div class="row">
                        <div class="col-lg-4">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_01.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>Avatar Nam 01</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_02.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Avatar Nam 02</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_03.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Avatar Nam 03</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_04.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Avatar Nam 04</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_05.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Avatar Nữ 01</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_06.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Avatar Nữ 02</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_07.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Avatar Nữ 03</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/binhluan')}}/avatar_08.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Avatar Nữ 04</h5>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group invalid">
                                <label for="hoten" class="form-label">Nhập họ và tên</label>
                                <input type="text" class="form-control" name="hoten" id="hoten" required >
                            </div>
                            <div class="form-group">
                                <label for="avatar_id">Chọn avatar<span class="text-danger font-weight-bold">*</span></label>
                                <select id="avatar_id" class="form-control custom-select @error('avatar_id') is-invalid @enderror" name="avatar_id" autofocus>
                                    <option value="">--Chọn avatar bạn thích--</option>
                                    <option value="1">Nam 01</option>
                                    <option value="2">Nam 02</option>
                                    <option value="3">Nam 03</option>
                                    <option value="4">Nam 04</option>
                                    <option value="5">Nữ 01</option>
                                    <option value="6">Nữ 02</option>
                                    <option value="7">Nữ 03</option>
                                    <option value="8">Nữ 04</option>
                                </select>
                            </div>
                            <div class="form-group invalid mt-3">
                                <label for="noidung" class="form-label">Nhập nội dung cụ thể</label>
                                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="4"></textarea>
                              </div>
                        </div>
                        <div class="col-lg-2" hidden>
                            <div class="form-group">
                                <label for="baiviet_id" class="form-label">Bài viết</label>
                                <input type="text" value="{{$data->id}}" class="form-control" name="baiviet_id" id="baiviet_id" required readonly >
                            </div>
                        </div>
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Gửi thông tin</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </section>

</main>
