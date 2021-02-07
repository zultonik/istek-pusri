<?php

namespace App\Exports;

use App\report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class reportExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return report::all();
    }
     public function map($report): array
    {
    	return [
    		$report->tahun,
    		$report->bulan
    	];
    }

    public function headings(): array
    {
        return [
            'TAHUN',
            'BULAN'
        ];
    }
}
