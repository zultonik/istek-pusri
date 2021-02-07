<?php

namespace App\Exports;

use App\evaluation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class evaluationExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return evaluation::all();
    }
    public function map($evaluation): array
    {
    	return [
    		$evaluation->plant_unit,
    		$evaluation->inspection_report,
    		$evaluation->create_date,
    		$evaluation->document_title,
    		$evaluation->repair_resume
    	];
    }

    public function headings(): array
    {
        return [
            'PLANT UNIT',
            'INSPECTION REPORT',
            'TANGGAL',
            'DOCUMENT TITLE',
            'REPAIR RESUME'
        ];
    }
}
