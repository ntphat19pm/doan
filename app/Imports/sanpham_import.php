<?php

namespace App\Imports;

use App\Models\sanpham;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class sanpham_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new sanpham([
            'tensp' => $row['tensp'],
            'anh' => $row['anh'],
            'anh1' => $row['anh1'],
            'danhmuc_id' => $row['danhmuc_id'],
            'chitiet' => $row['chitiet'],
            'slug' => $row['slug'],
            'link' => $row['link'],
        ]);
    }
}
