<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['bio', 'address'];

    protected $guarded = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
