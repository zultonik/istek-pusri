<?php

namespace App\Exports;

use App\gugus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class gugusExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return gugus::all();
    }
    public function map($gugus): array
    {
    	return [
    		$gugus->innovation_type,
    		$gugus->team_name,
    		$gugus->team_structure,
    		$gugus->year,
    		$gugus->innovation_title,
    		$gugus->abstraction,
    		$gugus->achievement,
    	];
    }

    public function headings(): array
    {
        return [
            'INNOVATION TYPE',
            'TEAM NAME',
            'TEAM STRUCTURE',
            'YEAR',
            'INNOVATION TITLE',
            'ABSTRACTION',
            'ACHIEVEMENT'
        ];
    }
}
