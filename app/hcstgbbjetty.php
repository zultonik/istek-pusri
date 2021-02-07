<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcstgbbjetty extends Model
{
    protected $table = 'hcstgbbjetty';
    protected $fillable = ['id','date','no_alat','nama_alat','hasil_pemeriksaan','metode_perbaikan','saran','kesimpulan','file'];
}
