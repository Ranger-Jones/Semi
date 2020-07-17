<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function polls()
    {
        return $this->belongsTo(Post::class);
    }
}
