<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcutilitas2b extends Model
{
    protected $table = 'hcutilitas2b';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
