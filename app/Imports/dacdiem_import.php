<?php

namespace App\Imports;

use App\Models\dacdiem;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class dacdiem_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new dacdiem([
            'tendacdiem' => $row['tendacdiem'],
            'chitiet' => $row['chitiet'],
            'sanpham_id' => $row['sanpham_id'],
        ]);
    }
}
