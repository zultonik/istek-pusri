<?php

namespace App\Exports;

use App\skeluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class skeluarExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return skeluar::all();
    }
        public function map($skeluar): array
    {
    	return [
    		$skeluar->no_surat,
    		$skeluar->jenis_surat,
    		$skeluar->tujuan_surat,
    		$skeluar->tembusan_surat,
    		$skeluar->perihal,
    		$skeluar->tanggal_keluar,
    		$skeluar->sifat_surat,
    		$skeluar->penyelesaian_disposisi,
    		$skeluar->no_agenda
    	];
    }

    public function headings(): array
    {
        return [
            'NO SURAT',
            'JENIS SURAT',
            'TUJUAN SURAT',
            'TEMBUSAN SURAT',
            'PERIHAL',
            'TANGGAL KELUAR',
            'SIFAT SURAT',
            'PENYELESAIAN DISPOSIS',
            'NO AGENDA'	
        ];
    }
}
