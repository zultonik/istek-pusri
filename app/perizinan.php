<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perizinan extends Model
{
    protected $table = 'perizinan';
    protected $fillable = ['id','plant_unit','last_date','date_test','certification_institution','certification_number','file'];
}
