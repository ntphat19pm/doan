<?php

namespace App\Exports;

use App\Models\dacdiem;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class dacdiem_export implements FromCollection, WithHeadings, WithMapping
{

    public function headings(): array
    {
        return [
            'id',
            'tendacdiem',
            'chitiet',
            'sanpham_id',
        ];
    }
    public function map($row): array
    {
        return [
            $row->id,
            $row->tendacdiem,
            $row->chitiet,
            $row->sanpham_id,
        ];
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dacdiem::all();
    }
}
