<?php

namespace Colegio;

use Illuminate\Database\Eloquent\Model;

class RegisterStudent extends Model
{
    protected $fillable= [
        'student_id',
        'hour_id',
    ];

    public function student()
    {
     return $this->belongsTo(Student::class);
    }

    public function subject()
    {
     return $this->belongsTo(Subject::class);
    }
    public function teacher()
    {
     return $this->belongsTo(Teacher::class);
    }
}
