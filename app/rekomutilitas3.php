<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekomutilitas3 extends Model
{
    protected $table = 'rekomutilitas3';
    protected $fillable = ['id','date','no_alat','nama_alat','area','no_rekom','no_notif','act','file','file2'];
}
