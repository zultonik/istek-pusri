<?php

namespace App\Exports;

use App\juklak;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;


class juklakExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return juklak::all();
    }
     public function map($juklak): array
    {
    	return [
    		$juklak->no_juklak,
    		$juklak->subject,
    		$juklak->create_date,
    		$juklak->resume_short
    	];
    }

    public function headings(): array
    {
        return [
            'NO PETUNJUK PELAKSANAAN',
            'SUBJECT',
            'TANGGAL',
            'RESUME SHORT'
        ];
    }
}
