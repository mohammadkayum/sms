<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamModel extends Model
{
    protected $table='exam';
    protected $fillable=['exam_name','heldon','year'];
}
