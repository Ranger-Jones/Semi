<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
