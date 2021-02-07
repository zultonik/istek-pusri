<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rbiammonia3prd extends Model
{
    protected $table = 'rbiammonia3prd';
    protected $fillable = ['id','equipment_code','ind_unit','ins_date','pid','lid','overhaul_date','pof','comp_damage','surround_damage','upl','environment_cost','pers_inj','total_fincost','pof_pol','mild_moderate','stuck','cof_col','gff','pof_overpress','pof_overcat','cof_overpress','cof_overcat','fto_rank','pol','pol_cat','col','col_cat','lf_rank','eta','dua_ta','tiga_ta','empat_ta','suggest_act'];
}
