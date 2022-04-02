<?php

namespace App\Exports;

use App\Models\sanpham;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class sanpham_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'id',
            'tensp',
            'anh',
            'anh1',
            'danhmuc_id',
            'chitiet',
            'slug',
            'link',
        ];
    }
    public function map($row): array
    {
        return [
            $row->id,
            $row->tensp,
            $row->anh,
            $row->anh1,
            $row->danhmuc_id,
            $row->chitiet,
            $row->slug,
            $row->link,
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return sanpham::all();
    }
}
