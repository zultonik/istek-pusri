<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gugus extends Model
{
    protected $table = 'gugus';
    protected $fillable = ['id','innovation_type','team_name','team_structure','year','innovation_title','abstraction','achievement','file'];
}
