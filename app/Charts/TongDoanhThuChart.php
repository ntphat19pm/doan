<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\chitieu;
use App\Models\thuchien_chitieu;

class TongDoanhThuChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = chitieu::select('id','doanhthu_tong','tytrong_tong')->orderby('id','DESC')->first();
        $TH = thuchien_chitieu::select('chitieu_id','doanhthu_tong')->where('chitieu_id',$KH->id)->first();

        $ptTH = $TH->doanhthu_tong/$KH->doanhthu_tong ;
        $conlai= $KH->doanhthu_tong - $TH->doanhthu_tong;
        if($conlai > 0)
        {
            $tinh=$KH->doanhthu_tong - $TH->doanhthu_tong;
        }
        else
        {
            $tinh=0;
        }
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrong_tong;
        }
        else
        {
            $diem = (120/100) * $KH->tytrong_tong;
        }
        return Chartisan::build()
        ->labels(['Tổng doanh thu'])
        ->dataset('Kế hoạch', [$KH->doanhthu_tong])
        ->dataset('Thực hiện', [$TH->doanhthu_tong])
        ->dataset('Còn lại', [$tinh]);
    }
}