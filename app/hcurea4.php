<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcurea4 extends Model
{
    protected $table = 'hcurea4';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
