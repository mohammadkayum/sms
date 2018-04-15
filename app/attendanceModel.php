<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendanceModel extends Model
{
    protected $table='attendance';
    protected $fillable=['student_id','roll','class','session','date','in_time','out_time','status'];
}
