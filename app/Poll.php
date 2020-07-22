<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
        'text', 'description', 'image'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }



}
