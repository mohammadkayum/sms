<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjectModel extends Model
{
    protected $table='subject';
    protected $fillable=['subject_id','subject_name','teacher_id','class','mark'];
}
