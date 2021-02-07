<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qc extends Model
{
    protected $table = 'qc';
    protected $fillable = ['id','no_gr','no_qc','po','pr','matl_code','nama_barang','item','vendor','p','m','g','t','penyerahan','te_to','file'];
}
