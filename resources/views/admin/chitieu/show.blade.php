@extends('layouts.admin')
@section('main')
<div class="card-body">
    <div class="form-group">
        <a href="{{route('chitieu.index')}}" class="btn btn-sm btn-danger">
            <i class="fas fa-sign-out-alt"> Quay về bảng chỉ tiêu</i>     
        </a>
        <a href="{{route('chitieu.edit',$data->id)}}" class="btn btn-sm btn-success float-right">
            <i class="fas fa-edit"> Sửa chỉ tiêu kế hoạch</i>     
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <i class="fas fa-chart-bar mr-1"></i>
        KẾ HOẠCH CHỈ TIÊU VÀ THỰC HIỆN CHỈ TIÊU THÁNG {{ $data->thang_id }}
        </h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content p-0">
        
            <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
                <div class="row">
                    <div class="col-lg-3">  
                        <label for="doanhthu_dichvu" class="form-label">Doanh thu dịch vụ (Kế hoạch)</label>
                        <input type="number" value="{{$data->doanhthu_dichvu}}" class="form-control" id="doanhthu_dichvu" name="doanhthu_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu dịch vụ (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->doanhthu_dichvu}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3"> 
                        <label for="doanhthu_tong" class="form-label">Tổng doanh thu (Kế hoạch)</label>
                        <input type="number" value="{{$data->doanhthu_tong}}" class="form-control" id="doanhthu_tong" name="doanhthu_tong" readonly required>
                    </div>
                    <div class="col-lg-3"> 
                        <label for="tytrong_dichvu" class="form-label">Tổng doanh thu (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->doanhthu_tong}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="duan" class="form-label">Doanh thu dự án (Kế hoạch)</label>
                        <input type="number" value="{{$data->duan}}" class="form-control" id="duan" name="duan" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu dự án (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->duan}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="giaoduc" class="form-label">Doanh thu giáo dục (Kế hoạch)</label>
                        <input type="number" value="{{$data->giaoduc}}" class="form-control" id="giaoduc" name="giaoduc" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu giáo dục (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->giaoduc}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="kenhtruyen" class="form-label">Doanh thu kênh truyền</label>
                        <input type="number" value="{{$data->kenhtruyen}}" class="form-control" id="kenhtruyen" name="kenhtruyen" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu kênh truyền (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->kenhtruyen}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="yte" class="form-label">Doanh thu y tế</label>
                        <input type="number" value="{{$data->yte}}" class="form-control" id="yte" name="yte" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu y tế (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->yte}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>            
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            DOANH THU DỊCH VỤ THÁNG {{ $data->thang_id }}
            </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                <div class="tab-content p-0">
                    
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="cookieChart" width="100%" height="85"></canvas>

                    </div>
                    
                </div>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            TỔNG DOANH THU THÁNG {{ $data->thang_id }}
            </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                <div class="tab-content p-0">
                    
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="tongChart" width="100%" height="85"></canvas>

                    </div>
                    
                </div>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            DOANH THU DỰ ÁN THÁNG {{ $data->thang_id }}
            </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                <div class="tab-content p-0">
                    
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="duanChart" width="100%" height="85"></canvas>

                    </div>
                    
                </div>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            DOANH THU KÊNH TRUYỀN THÁNG {{ $data->thang_id }}
            </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                <div class="tab-content p-0">
                    
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="kenhtruyenChart" width="100%" height="85"></canvas>

                    </div>
                    
                </div>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            DOANH THU GIÁO DỤC THÁNG {{ $data->thang_id }}
            </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                <div class="tab-content p-0">
                    
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="giaoducChart" width="100%" height="85"></canvas>

                    </div>
                    
                </div>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            DOANH THU Y TẾ THÁNG {{ $data->thang_id }}
            </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                <div class="tab-content p-0">
                    
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="yteChart" width="100%" height="85"></canvas>

                    </div>
                    
                </div>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fa fa-bars mr-1"></i>
          PROGRESS BAR BIỂU THỊ CÁC HẠNG MỤC THÁNG {{ $data->thang_id }}
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
            <div class="tab-content p-0">
                
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div class="row">
                        <div class="col-lg-9">  
                            <div class="progress-group">
                                Doanh thu dịch vụ
                                <span class="float-right"><b>{{$thuchien->doanhthu_dichvu}}</b>/{{$data->doanhthu_dichvu}}</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="{{$thuchien->doanhthu_dichvu}}" aria-valuemin="0" aria-valuemax="{{$data->doanhthu_dichvu}}" style="width:{{number_format(($thuchien->doanhthu_dichvu/$data->doanhthu_dichvu)*100)}}%">{{number_format(($thuchien->doanhthu_dichvu/$data->doanhthu_dichvu)*100)}}%</div>
                                    
                                </div>
                            </div>
                            <div class="progress-group">
                                Tổng doanh thu
                                <span class="float-right"><b>{{$thuchien->doanhthu_tong}}</b>/{{$data->doanhthu_tong}}</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="{{$thuchien->doanhthu_tong}}" aria-valuemin="0" aria-valuemax="{{$data->doanhthu_tong}}" style="width:{{number_format(($thuchien->doanhthu_tong/$data->doanhthu_tong)*100)}}%">{{number_format(($thuchien->doanhthu_tong/$data->doanhthu_tong)*100)}}%</div>
                                    
                                </div>
                            </div>
                            <div class="progress-group">
                                Doanh thu kênh truyền
                                <span class="float-right"><b>{{$thuchien->kenhtruyen}}</b>/{{$data->kenhtruyen}}</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="{{$thuchien->kenhtruyen}}" aria-valuemin="0" aria-valuemax="{{$data->kenhtruyen}}" style="width:{{number_format(($thuchien->kenhtruyen/$data->kenhtruyen)*100)}}%">{{number_format(($thuchien->kenhtruyen/$data->kenhtruyen)*100)}}%</div>
                                    
                                </div>
                            </div>
                            <div class="progress-group">
                                Doanh thu dự án
                                <span class="float-right"><b>{{$thuchien->duan}}</b>/{{$data->duan}}</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="{{$thuchien->duan}}" aria-valuemin="0" aria-valuemax="{{$data->duan}}" style="width:{{number_format(($thuchien->duan/$data->duan)*100,2)}}%">{{number_format(($thuchien->duan/$data->duan)*100)}}%</div>
                                    
                                </div>
                            </div>
                            <div class="progress-group">
                                Doanh thu giáo dục
                                <span class="float-right"><b>{{$thuchien->giaoduc}}</b>/{{$data->giaoduc}}</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" role="progressbar" aria-valuenow="{{$thuchien->giaoduc}}" aria-valuemin="0" aria-valuemax="{{$data->giaoduc}}" style="width:{{number_format(($thuchien->giaoduc/$data->giaoduc)*100,2)}}%">{{number_format(($thuchien->giaoduc/$data->giaoduc)*100)}}%</div>
                                    
                                </div>
                            </div>
                            <div class="progress-group">
                                Doanh thu y tế
                                <span class="float-right"><b>{{$thuchien->yte}}</b>/{{$data->yte}}</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="{{$thuchien->yte}}" aria-valuemin="0" aria-valuemax="{{$data->yte}}" style="width:{{number_format(($thuchien->yte/$data->yte)*100,2)}}%">{{number_format(($thuchien->yte/$data->yte)*100)}}%</div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">  
                            <div class="progress-group">
                                Điểm doanh thu dịch vụ
                                @if(($thuchien->doanhthu_dichvu/$data->doanhthu_dichvu) < 120 )
                                    <span class="float-right"><b>{{number_format(($thuchien->doanhthu_dichvu/$data->doanhthu_dichvu)*$data->tytrong_dichvu,2)}}</b></span>
                                @else
                                    <span class="float-right"><b>{{number_format((120/100)*$data->tytrong_dichvu,2)}}</b></span>
                                @endif
                                
                            </div>

                            <div class="progress-group">
                                Điểm tổng doanh thu
                                @if(($thuchien->doanhthu_tong/$data->doanhthu_tong) < 120 )
                                    <span class="float-right"><b>{{number_format(($thuchien->doanhthu_tong/$data->doanhthu_tong)*$data->tytrong_tong,2)}}</b></span>
                                @else
                                    <span class="float-right"><b>{{number_format((120/100)*$data->tytrong_tong,2)}}</b></span>
                                @endif
                                
                            </div>

                            <div class="progress-group">
                                Điểm doanh thu kênh truyền
                                @if(($thuchien->kenhtruyen/$data->kenhtruyen) < 120 )
                                    <span class="float-right"><b>{{number_format(($thuchien->kenhtruyen/$data->kenhtruyen)*$data->tytrong_kenhtruyen,2)}}</b></span>
                                @else
                                    <span class="float-right"><b>{{number_format((120/100)*$data->tytrong_kenhtruyen,2)}}</b></span>
                                @endif
                                
                            </div>

                            <div class="progress-group">
                                Điểm doanh thu dự án
                                @if(($thuchien->duan/$data->duan) < 120 )
                                    <span class="float-right"><b>{{number_format(($thuchien->duan/$data->duan)*$data->tytrong_duan,2)}}</b></span>
                                @else
                                    <span class="float-right"><b>{{number_format((120/100)*$data->tytrong_duan,2)}}</b></span>
                                @endif
                                
                            </div>

                            <div class="progress-group">
                                Điểm doanh thu giáo dục
                                @if(($thuchien->giaoduc/$data->giaoduc) < 120 )
                                    <span class="float-right"><b>{{number_format(($thuchien->giaoduc/$data->giaoduc)*$data->tytrong_giaoduc,2)}}</b></span>
                                @else
                                    <span class="float-right"><b>{{number_format((120/100)*$data->tytrong_giaoduc,2)}}</b></span>
                                @endif
                                
                            </div>
                            <div class="progress-group">
                                Điểm doanh thu y tế
                                @if(($thuchien->yte/$data->yte) < 120 )
                                    <span class="float-right"><b>{{number_format(($thuchien->yte/$data->yte)*$data->tytrong_yte,2)}}</b></span>
                                @else
                                    <span class="float-right"><b>{{number_format((120/100)*$data->tytrong_yte,2)}}</b></span>
                                @endif
                                
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
      </div>
      <!-- /.card-body -->
    </div>
</div>

@endsection

@section('js')
<script>
    var canvasElement = document.getElementById("cookieChart");
    var config={
        type:"pie",
        data:{
            labels: ["Thực hiện","Kế hoạch"],
            datasets: [
                {
                    label:"Số lượng",
                    data:[{{$thuchien->doanhthu_dichvu}},{{$data->doanhthu_dichvu}}],
                    backgroundColor: [
                        "rgba(0, 255, 255, 0.2)",
                        "rgba(255, 200, 56, 0.2)",
                    ],
                    borderColor: [
                        "rgba(0, 255, 255, 1)",
                        "rgba(255, 200, 56, 1)",
                    ],
                    borderWidth:1,
                },
            ],
            
        },
    };

    var cookieChart=new Chart(canvasElement, config);
</script>

<script>
    var canvasElement = document.getElementById("tongChart");
    var config={
        type:"pie",
        data:{
            labels: ["Thực hiện","Kế hoạch"],
            datasets: [
                {
                    label:"number",
                    data:[{{$thuchien->doanhthu_tong}},{{$data->doanhthu_tong}}],
                    backgroundColor: [
                        "rgba(0, 255, 255, 0.2)",
                        "rgba(255, 200, 56, 0.2)",
                    ],
                    borderColor: [
                        "rgba(0, 255, 255, 1)",
                        "rgba(255, 200, 56, 1)",
                    ],
                    borderWidth:1,
                },
            ],
            
        },
    };

    var tongChart=new Chart(canvasElement, config);
</script>

<script>
    var canvasElement = document.getElementById("duanChart");
    var config={
        type:"pie",
        data:{
            labels: ["Thực hiện","Kế hoạch"],
            datasets: [
                {
                    label:"number",
                    data:[{{$thuchien->duan}},{{$data->duan}}],
                    backgroundColor: [
                        "rgba(0, 255, 255, 0.2)",
                        "rgba(255, 200, 56, 0.2)",
                    ],
                    borderColor: [
                        "rgba(0, 255, 255, 1)",
                        "rgba(255, 200, 56, 1)",
                    ],
                    borderWidth:1,
                },
            ],
            
        },
    };

    var duanChart=new Chart(canvasElement, config);
</script>

<script>
    var canvasElement = document.getElementById("kenhtruyenChart");
    var config={
        type:"pie",
        data:{
            labels: ["Thực hiện","Kế hoạch"],
            datasets: [
                {
                    label:"number",
                    data:[{{$thuchien->kenhtruyen}},{{$data->kenhtruyen}}],
                    backgroundColor: [
                        "rgba(0, 255, 255, 0.2)",
                        "rgba(255, 200, 56, 0.2)",
                    ],
                    borderColor: [
                        "rgba(0, 255, 255, 1)",
                        "rgba(255, 200, 56, 1)",
                    ],
                    borderWidth:1,
                },
            ],
            
        },
    };

    var kenhtruyenChart=new Chart(canvasElement, config);
</script>

<script>
    var canvasElement = document.getElementById("giaoducChart");
    var config={
        type:"pie",
        data:{
            labels: ["Thực hiện","Kế hoạch"],
            datasets: [
                {
                    label:"number",
                    data:[{{$thuchien->giaoduc}},{{$data->giaoduc}}],
                    backgroundColor: [
                        "rgba(0, 255, 255, 0.2)",
                        "rgba(255, 200, 56, 0.2)",
                    ],
                    borderColor: [
                        "rgba(0, 255, 255, 1)",
                        "rgba(255, 200, 56, 1)",
                    ],
                    borderWidth:1,
                },
            ],
            
        },
    };

    var giaoducChart=new Chart(canvasElement, config);
</script>

<script>
    var canvasElement = document.getElementById("yteChart");
    var config={
        type:"pie",
        data:{
            labels: ["Thực hiện","Kế hoạch"],
            datasets: [
                {
                    label:"number",
                    data:[{{$thuchien->yte}},{{$data->yte}}],
                    backgroundColor: [
                        "rgba(0, 255, 255, 0.2)",
                        "rgba(255, 200, 56, 0.2)",
                    ],
                    borderColor: [
                        "rgba(0, 255, 255, 1)",
                        "rgba(255, 200, 56, 1)",
                    ],
                    borderWidth:1,
                },
            ],
            
        },
    };

    var yteChart=new Chart(canvasElement, config);
</script>
@endsection
