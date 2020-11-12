<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = [
        'user', 'mark', 'currentDate', 'subject', 'inclass', 'teacher', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
