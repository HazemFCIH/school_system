<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

 
  public function students()
  {
      return $this->hasMany(Student::class, 'rooms_id');
  }

public function teachers()
{
    return $this->belongsToMany(Teacher::class,'rooms_teachers', 'rooms_id', 'teachers_id')->withTimestamps();
}

}
