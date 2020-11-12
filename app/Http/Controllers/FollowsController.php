<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        $notification_data = array(
            'sender' => auth()->user()->username,
            'receiver' => $user->username,
            'content' => 'Du hast einen neuen Follower!',
            'type' => 'Follow',
            'checked' => 'unchecked'
        );
        $user->notifications()->create($notification_data);
        return auth()->user()->following()->toggle($user->profile);
    }
    
}
    