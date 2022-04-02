<?php

namespace App\Exports;

use App\Models\tinhnang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class tinhnang_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'id',
            'tentinhnang',
            'chitiet',
            'sanpham_id',
        ];
    }
    public function map($row): array
    {
        return [
            $row->id,
            $row->tentinhnang,
            $row->chitiet,
            $row->sanpham_id,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tinhnang::all();
    }
}
