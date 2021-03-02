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

  /**
   * Get all of the students for the Room
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function students(): HasMany
  {
      return $this->hasMany(Student::class, 'rooms_id');
  }
}
