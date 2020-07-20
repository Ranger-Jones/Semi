<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
        'code', 'text', 'description'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function vote()
    {
        return $this->belongsToMany(User::class);
    }

}
