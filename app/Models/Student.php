<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'rooms_id',
    ];
/**
 * Get the room that owns the Student
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function rooms()
{
    return $this->belongsTo(Room::class);
}
}
