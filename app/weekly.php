<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weekly extends Model
{
    protected $table = 'weekly';
    protected $fillable = ['id','tahun','bulan','minggu','file'];
}
