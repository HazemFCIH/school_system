<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subjects',
        'rooms_id',
    ];
/**
 * The rooms that belong to the Teacher
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function rooms()
{
    return $this->belongsToMany(Room::class, 'rooms_teachers', 'teachers_id', 'rooms_id')->withTimestamps();
}

}
