<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qc2 extends Model
{
    protected $table = 'qc2';
    protected $fillable = ['id','no_gr','no_qc','po','pr','matl_code','nama_barang','item','vendor','p','m','g','t','penyerahan','te_to','file'];
}
