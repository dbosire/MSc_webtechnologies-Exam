<?php

namespace App\Models;

use App\User;
use Eloquent;

class Subject extends Eloquent
{
    protected $fillable = ['name', 'my_class_id', 'teacher_id', 'slug','description','category'];

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
