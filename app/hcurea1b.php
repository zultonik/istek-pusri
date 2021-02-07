<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcurea1b extends Model
{
    protected $table = 'hcurea1b';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
