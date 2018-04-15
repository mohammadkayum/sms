<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admissionModel extends Model
{
    protected $table='admission';
    protected $fillable=['e_name','b_name','class','year','gender','blood','dmy','religion','std_phone','pre_school','f_name','m_name','f_occation','m_occation','g_name','g_nid','image','status','present_address','parmanent_address','quota'];
}
