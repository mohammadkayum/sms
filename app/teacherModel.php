<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherModel extends Model
{
    protected $table='teacher';
    protected $fillable=['e_name','b_name','gender','blood','dmy','religion','t_id','email','phone','nid','image','present_address','parmanent_address'];
}
