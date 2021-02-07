<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcurea2b extends Model
{
    protected $table = 'hcurea2b';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
