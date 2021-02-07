<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evaluation extends Model
{
    protected $table = 'evaluation';
    protected $fillable = ['id','plant_unit','inspection_report','create_date','document_title','repair_resume','file'];
}
