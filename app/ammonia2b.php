<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ammonia2b extends Model
{
    protected $table  = 'ammonia2b';
    protected $fillable = ['id','code_gabungan','code_company','company','code_plant','plant','code_section','section','code_sub','sub','equipment','description','file','file2','file3','file4','file5','file6'];
}
