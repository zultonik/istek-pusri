<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcnpk extends Model
{
    protected $table = 'hcnpk';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
