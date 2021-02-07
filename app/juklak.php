<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juklak extends Model
{
    protected $table = 'juklak';
    protected $fillable = ['id','no_juklak','subject','create_date','resume_short','file'];
}
