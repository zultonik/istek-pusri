<?php

namespace App\Exports;

use App\weekly;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class weeklyExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return weekly::all();
    }

    public function map($weekly): array
    {
    	return [
    		$weekly->tahun,
    		$weekly->bulan,
    		$weekly->minggu
    	];
    }

    public function headings(): array
    {
        return [
            'Tahun',
            'Bulan',
            'Minggu ke-'
        ];
    }
}
