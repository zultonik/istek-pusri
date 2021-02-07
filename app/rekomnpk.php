<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekomnpk extends Model
{
    protected $table = 'rekomnpk';
    protected $fillable = ['id','date','no_alat','nama_alat','area','no_rekom','no_notif','act','file','file2'];
}
