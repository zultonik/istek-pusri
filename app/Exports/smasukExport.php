<?php

namespace App\Exports;

use App\smasuk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class smasukExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return smasuk::all();
    }
    public function map($smasuk): array
    {
    	return [
    		$smasuk->no_surat,
    		$smasuk->jenis_surat,
    		$smasuk->asal_surat,
    		$smasuk->tanggal_surat,
    		$smasuk->perihal,
    		$smasuk->tanggal_terima,
    		$smasuk->sifat_surat,
    		$smasuk->tujuan,
    		$smasuk->no_agenda
    	];
    }

    public function headings(): array
    {
        return [
            'NO SURAT',
            'JENIS SURAT',
            'ASAL SURAT',
            'TANGGAL SURAT',
            'PERIHAL',
            'TANGGAL TERIMA',
            'SIFAT SURAT',
            'TUJUAN',
            'NO AGENDA'	
        ];
    }
}
