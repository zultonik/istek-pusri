<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcurea3 extends Model
{
    protected $table = 'hcurea3';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
