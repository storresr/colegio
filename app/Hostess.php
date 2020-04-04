<?php

namespace Colegio;

use Illuminate\Database\Eloquent\Model;

class Hostess extends Model
{
    protected $fillable = [
        
        'name', 'last_name','identification','phone', 'direction', 'relationship',
    ];

    public function student()
    {
      return $this->hasMany(Student::class);
    }
}
