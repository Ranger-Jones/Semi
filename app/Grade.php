<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'name', 'teacher'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
