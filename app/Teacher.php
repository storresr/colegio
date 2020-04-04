<?php

namespace Colegio;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        
        'name', 'last_name','phone', 'direction','profetion','identification'
    ];

    public function hour()
  {
    return $this->hasMany(Hour::class);
  }
  public function registerstudent()
  {
    return $this->hasMany(RegisterStudent::class);
  }
}
