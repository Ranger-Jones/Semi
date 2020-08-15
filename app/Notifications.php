<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $fillable = [
        'sender', 'receiver', 'content', 'type', 'checked'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
