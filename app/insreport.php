<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insreport extends Model
{
    protected $table = 'insreport';
    protected $fillable = ['id','plant_unit','inspection_report','create_date','document_title','repair_resume','file'];
}
