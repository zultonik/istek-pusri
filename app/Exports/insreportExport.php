<?php

namespace App\Exports;

use App\insreport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class insreportExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return insreport::all();
    }
    public function map($insreport): array
    {
    	return [
    		$insreport->plant_unit,
    		$insreport->inspection_report,
    		$insreport->create_date,
    		$insreport->document_title,
    		$insreport->repair_resume
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
