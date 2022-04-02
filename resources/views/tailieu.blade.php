@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_mangluoi.jpg'); background-size:1600px; height: 300px">

  <div class="container">
    <h1 class="text-center">TÀI LIỆU</h1>
  </div>

</section><!-- End Hero -->

<main id="main">
    <section id="faq" class="faq mt-5 mb-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-5">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{url('public/uploads/tailieu')}}/hinh_1.png" class="img-fluid animated d-block w-100" alt="">
                          </div>
                          <div class="carousel-item">
                            <img src="{{url('public/uploads/tailieu')}}/hinh_2.png" class="img-fluid animated d-block rounded mx-auto" style="width:500px" alt="">
                          </div>
                          <div class="carousel-item">
                            <img src="{{url('public/uploads/tailieu')}}/hinh_3.png" class="img-fluid animated d-block rounded mx-auto" style="width:500px" alt="">
                          </div>
                          <div class="carousel-item">
                            <img src="{{url('public/uploads/tailieu')}}/hinh_4.png" class="img-fluid animated d-block rounded mx-auto" style="width:500px" alt="">
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-7">
                  <form action="" class="form-inline mb-3" autocomplete="off">
  
                    <div class="input-group mb-3">
                      <input type="text" class="form-control typeahead" name="tukhoa" id="myInput" aria-describedby="button-addon2"> 
                      {{-- <input type="text" name="tukhoa" id="tukhoa" class="form-control typeahead" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"> --}}
                      <a href="{{route('home.tailieu')}}" class="btn btn-outline-danger" id="button-addon2"><i class="fa fa-rotate-left"></i></a>
                    </div>
                  </form> 
                    <table id="example1" class="table table-hover">
                        <tbody id="myTable">
                            @foreach($tailieu as $item)
                            <tr>
                                <td>
                                    @if($item->loai_file==1)
                                    <img src="{{url('public/uploads/tailieu')}}/file.png" class="img-fluid" alt="" style="width:30px">
                                    @elseif($item->loai_file==2)
                                    <img src="{{url('public/uploads/tailieu')}}/word.png" class="img-fluid" alt="" style="width:30px">
                                    @elseif($item->loai_file==3)
                                    <img src="{{url('public/uploads/tailieu')}}/excel.png" class="img-fluid" alt="" style="width:30px">
                                    @elseif($item->loai_file==4)
                                    <img src="{{url('public/uploads/tailieu')}}/powerpoint.png" class="img-fluid" alt="" style="width:30px">
                                    @elseif($item->loai_file==5)
                                    <img src="{{url('public/uploads/tailieu')}}/document.png" class="img-fluid" alt="" style="width:30px">
                                    @endif 
                                    {{$item->ten_tailieu}}
                                </td>
                                <td width="5%" class="text-right" hidden>
                                  {{$item->loai_file}}
                                </td>             
                                <td width="5%" class="text-right">
                                    <a  href="{{url('public/uploads/tailieu')}}/{{$item->file}}" class="">
                                        <i class="fa fa-download"></i>
                                    </a>
                                </td>            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <div class="pagination justify-content-center" >{{$tailieu->appends(request()->all())->links()}}</div>
                      </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
<script type="text/javascript">                      
      var path = "{{ route('home.autocomplete') }}";
      $('input.typeahead').typeahead({
          source:  function (query, process) {
              return $.get(path, { query: query }, function (data) {
                  return process(data);
              });
          },
          highlighter: function (item, data) {
              var parts = item.split('#'),
                  html = '<div class="row">';
                  html += '<div class="col-lg-1">';
                  html += ' <img src="{{url('public/uploads/tailieu')}}/document.png" class="img-fluid" alt="" style="width:30px">';
                  html += '</div>';
                  html += '<div class="col-md-10 pl-0" style="padding-left: 5px;>"';
                  html += '<span>'+data.name+'</span>';
                  html += '</div>';
                  html += '</div>';
              return html;
      }
    });

</script> 
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

@endsection
       