<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class smasuk extends Model
{
    protected $table = 'smasuk';
    protected $fillable = ['id','no_surat','jenis_surat','asal_surat','tanggal_surat','perihal','tanggal_terima','sifat_surat','tujuan','no_agenda','file'];

}
