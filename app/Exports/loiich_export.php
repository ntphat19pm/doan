<?php

namespace App\Exports;

use App\Models\loiich;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class loiich_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'id',
            'tenloiich',
            'chitiet',
            'sanpham_id',
        ];
    }
    public function map($row): array
    {
        return [
            $row->id,
            $row->tenloiich,
            $row->chitiet,
            $row->sanpham_id,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return loiich::all();
    }
}
