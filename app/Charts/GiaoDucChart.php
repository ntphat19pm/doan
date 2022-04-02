<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\chitieu;
use App\Models\thuchien_chitieu;

class GiaoDucChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = chitieu::select('id','giaoduc','tytrong_giaoduc')->orderby('id','DESC')->first();
        $TH = thuchien_chitieu::select('chitieu_id','giaoduc')->where('chitieu_id',$KH->id)->first();

        $ptTH = $TH->giaoduc/$KH->giaoduc ;
        $conlai= $KH->giaoduc - $TH->giaoduc;
        if($conlai > 0)
        {
            $tinh=$KH->giaoduc - $TH->giaoduc;
        }
        else
        {
            $tinh=0;
        }
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrong_giaoduc;
        }
        else
        {
            $diem = (120/100) * $KH->tytrong_giaoduc;
        }
        return Chartisan::build()
        ->labels(['Doanh thu dịch vụ'])
        ->dataset('Kế hoạch', [$KH->giaoduc])
        ->dataset('Thực hiện', [$TH->giaoduc])
        ->dataset('Còn lại', [$tinh]);
    }
}