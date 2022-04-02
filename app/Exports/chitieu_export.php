<?php

namespace App\Exports;

use App\Models\chitieu;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class chitieu_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'thang_id',
            'doanhthu_dichvu',
            'tytrong_dichvu',
            'doanhthu_tong',
            'tytrong_tong',
            'duan',
            'tytrong_duan',
            'kenhtruyen',
            'tytrong_kenhtruyen',
            'giaoduc',
            'tytrong_giaoduc',
            'yte',
            'tytrong_yte',
        ];
    }
    public function map($row): array
    {
        return [
            $row->thang_id,
            $row->doanhthu_dichvu,
            $row->tytrong_dichvu,
            $row->doanhthu_tong,
            $row->tytrong_tong,
            $row->duan,
            $row->tytrong_duan,
            $row->kenhtruyen,
            $row->tytrong_kenhtruyen,
            $row->giaoduc,
            $row->tytrong_giaoduc,
            $row->yte,
            $row->tytrong_yte,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return chitieu::all();
    }
}
