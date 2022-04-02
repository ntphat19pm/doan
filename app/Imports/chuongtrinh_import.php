<?php

namespace App\Imports;

use App\Models\chuongtrinh;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class chuongtrinh_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new chuongtrinh([
            'thang_id' => $row['thang'],
            'ten_chuongtrinh' => $row['ten_chuong_trinh_hanh_dong'],
            'kehoach' => $row['ke_hoach'],
            'tytrong' => $row['ty_trong'],
            'thuchien' => 0,
        ]);
    }
}
