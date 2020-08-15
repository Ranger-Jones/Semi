<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Permission;

class Permission extends Model
{
    protected $fillable = [
        'permission', 'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
