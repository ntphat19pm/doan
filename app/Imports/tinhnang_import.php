<?php

namespace App\Imports;

use App\Models\tinhnang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class tinhnang_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new tinhnang([
            'tentinhnang' => $row['tentinhnang'],
            'chitiet' => $row['chitiet'],
            'sanpham_id' => $row['sanpham_id'],
        ]);
    }
}
