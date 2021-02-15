<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'caption', 'teacher', 'task', 'submissionDate', 'subject', 'images', 'inclass', 'currentDate'
    ];

    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
