<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekomstgbbjetty extends Model
{
    protected $table = 'rekomstgbbjetty';
    protected $fillable = ['id','date','no_alat','nama_alat','area','no_rekom','no_notif','act','file','file2'];
}
