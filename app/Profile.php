<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];


    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/vF3A6sMA9WxFZNBGU7CgN8az1B7deTUsFNVkpIOS.jpeg';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
