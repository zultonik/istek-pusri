<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usermanage extends Model
{
    protected $table = 'usermanage';
    protected $fillable = ['id','nama','user_id','jabatan'];
}
