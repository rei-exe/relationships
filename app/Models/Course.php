<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name'
    ];

    protected $guarded = [
        'user_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}