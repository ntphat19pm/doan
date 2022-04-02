<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\giohang;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\nhanvien;
use App\Models\doanhnghiep;
use App\Models\thongtin;
use App\Models\lienhe;
use App\Models\gioithieu;
use App\Models\video;
use App\Models\tailieu;
use App\Models\giaithuong;
use App\Models\thang;
use App\Models\giaoviec;
use App\Models\baiviet;
use App\Models\dauan;
use App\Models\cauhoi;
use App\Models\mangluoi;
use App\Models\lienhe_chuyendoi;
use App\Models\slider;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use ConsoleTVs\Charts\Registrar as Charts;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        Paginator::useBootstrap();
        view()->composer('*',function($view){
            $view->with([
                'danhmuc'=>danhmuc::all(),
                "slider"=>slider::where('trangthai',1)->get(),
                "thongtin"=>thongtin::where('trangthai',0)->get(),
                "lienhe_chuyendoi"=>lienhe_chuyendoi::where('trangthai_id',0)->get(),
                "linhvuc"=>danhmuc::where('linhvuc_id',0)->get(),
                "dichvu"=>danhmuc::where('linhvuc_id',1)->get(),
                "doanhnghiep"=>doanhnghiep::where('loai_kh',0)->get(),
                "chinhphu"=>doanhnghiep::where('loai_kh',1)->get(),
                'lienhe'=>lienhe::all(),
                'dauan'=>dauan::all(),
                'gioithieu'=>gioithieu::all(),
                'mangluoi'=>mangluoi::all(),
                'thang'=>thang::all(),
                'giaoviec'=>giaoviec::all(),
                'video'=>video::where('status',1)->paginate(6),
                'tailieu'=>tailieu::search()->paginate(10),
                'baiviet'=>baiviet::where('trangthai',0)->orderby('id','DESC')->paginate(5),
                'cauhoi'=>cauhoi::where('trangthai',1)->paginate(5),
                'sukien'=>baiviet::where('trangthai',0)->where('phanloai_id',0)->orderby('id','DESC')->paginate(20),
                'congnghe'=>baiviet::where('trangthai',0)->where('phanloai_id',1)->orderby('id','DESC')->paginate(20),
                'giohang'=>new giohang(),
                'sp'=>sanpham::search()->paginate(20),
            ]);
        });

        $charts->register([
            \App\Charts\DoanhThuDichVuChart::class,
            \App\Charts\TongDoanhThuChart::class,
            \App\Charts\DuAnChart::class,
            \App\Charts\KenhTruyenChart::class,
            \App\Charts\GiaoDucChart::class,
            \App\Charts\YTeChart::class,
        ]);
    }
}
