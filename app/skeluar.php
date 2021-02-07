<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skeluar extends Model
{
    protected $table = 'skeluar';
    protected $fillable = ['id','no_surat','jenis_surat','tujuan_surat','tembusan_surat','perihal','tanggal_keluar','sifat_surat','penyelesaian_disposisi','no_agenda','file'];
}
