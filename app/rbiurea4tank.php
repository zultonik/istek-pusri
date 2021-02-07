<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rbiurea4tank extends Model
{
    protected $table = 'rbiurea4tank';
    protected $fillable = ['id','equipment_code','ind_unit','thinning','ex_damage','brit_frac','stress_crack','htha','mech_fatigue','totaldf','fms','totalgff','pof','pof_category','flam_damage','flam_inj','toxic_damage','toxic_inj','non_damage','non_inj','final_area','area_based','final_fin','fin_based','area_cat','fin_cat','area_rank','fin_rank','eta','dua_ta','tiga_ta','empat_ta','suggest_act'];
}
