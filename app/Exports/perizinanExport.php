<?php

namespace App\Exports;

use App\perizinan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class perizinanExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return perizinan::all();
    }
    public function map($perizinan): array
    {
    	return [
    		$perizinan->plant_unit,
    		$perizinan->last_date,
    		$perizinan->date_test,
    		$perizinan->certification_institution,
    		$perizinan->certification_number
    	];
    }

    public function headings(): array
    {
        return [
            'PLANT UNIT',
            'LAST DATE',
            'DATE TEST',
            'CERTIFICATION INSTITUTION',
            'CERTIFICATION NUMBER'
        ];
    }
}
