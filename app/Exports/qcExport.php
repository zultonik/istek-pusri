<?php

namespace App\Exports;

use App\qc;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class qcExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return qc::all();
    }
     public function map($qc): array
    {
    	return [
    		$qc->no_gr,
    		$qc->no_qc,
    		$qc->po,
    		$qc->pr,
    		$qc->matl_code,
    		$qc->nama_barang,
    		$qc->item,
    		$qc->vendor,
    		$qc->p,
    		$qc->m,
    		$qc->g,
    		$qc->penyerahan,
    		$qc->te_to
    	];
    }

    public function headings(): array
    {
        return [
            'NO GR',
            'NO QC',
            'PO',
            'PR',
            'MATL CODE',
            'NAMA BARANG',
            'ITEM',
            'VEDOR',
            'P',
            'M',
            'G',
            'PENYERAHAN',
            'TE-TO'	
        ];
    }
}
