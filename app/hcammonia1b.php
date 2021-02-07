<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcammonia1b extends Model
{
    protected $table = 'hcammonia1b';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
