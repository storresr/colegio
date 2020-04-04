<?php

namespace Colegio;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  protected $fillable = [
    
    'name', 'daily_hours', 'weekly_intensity',
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
