<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTableRecord extends Model
{
    //
    protected $fillable = ['name', 'my_class_id', 'exam_id', 'year','description'];
}
