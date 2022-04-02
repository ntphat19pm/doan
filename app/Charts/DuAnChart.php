<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\chitieu;
use App\Models\thuchien_chitieu;

class DuAnChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $KH = chitieu::select('id','duan','tytrong_duan')->orderby('id','DESC')->first();
        $TH = thuchien_chitieu::select('chitieu_id','duan')->where('chitieu_id',$KH->id)->first();

        $ptTH = $TH->duan/$KH->duan ;
        $conlai= $KH->duan - $TH->duan;
        if($conlai > 0)
        {
            $tinh=$KH->duan - $TH->duan;
        }
        else
        {
            $tinh=0;
        }
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrong_duan;
        }
        else
        {
            $diem = (120/100) * $KH->tytrong_duan;
        }

        return Chartisan::build()
        ->labels(['Doanh thu dự án'])
        ->dataset('Kế hoạch', [$KH->duan])
        ->dataset('Thực hiện', [$TH->duan])
        ->dataset('Còn lại', [$tinh]);
    }
}