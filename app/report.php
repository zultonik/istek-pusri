<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    protected $table = 'report';
    protected $fillable =['id','tahun','bulan','file'];
}
