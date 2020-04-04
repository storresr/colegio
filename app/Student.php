<?php

namespace Colegio;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
            'identification' ,
            'name'           ,
            'last_name'      ,
            'phone'          ,
            'direction'      ,
            'neighborhood'   ,
            'rh'             ,
            'eps'            ,
            'date'           ,
            'hour_id'        ,
            'hostess_id'     ,
    ];

    public function hour()
    {
     return $this->belongsTo(Hour::class);
    }

    public function hostess()
    {
     return $this->belongsTo(Hostess::class);
    }

    public function registerstudent()
    {
      return $this->hasMany(RegisterStudent::class);
    }
}
