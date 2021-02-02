<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'teacher', 'classe'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
