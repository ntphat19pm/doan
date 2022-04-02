<?php

namespace App\Imports;

use App\Models\loiich;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class loiich_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new loiich([
            'tenloiich' => $row['tenloiich'],
            'chitiet' => $row['chitiet'],
            'sanpham_id' => $row['sanpham_id'],
        ]);
    }
}
