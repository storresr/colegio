<?php

namespace Colegio;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $fillable = [
        
        'subject_id', 'teacher_id',
    ];

    public function teacher()
    {
     return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
     return $this->belongsTo(Subject::class);
    }

    
}
