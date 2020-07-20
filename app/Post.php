<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function polls()
    {
        return $this->hasMany(Poll::class);
    }

    public function votedPeople(){
        return $this->belongsToMany(User::class);
    }
}
