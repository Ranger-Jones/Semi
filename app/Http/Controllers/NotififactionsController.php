<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications;
use App\User;

class NotififactionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function update(Notifications $notification_id)
    {
        Notifications::where('id', $notification_id['id'])->update([
            'checked' => 'checked'
        ]);
        if ($notification_id['type'] == 'Note'){
            return redirect('/m');
        }
        else if($notification_id['type'] == 'Follow'){
            $follower = User::where('username', $notification_id['sender'])->first();
            return redirect('/profile/' . $follower->id);
        }
        else{
            return redirect('/');
        }
    }

    public function index()
    {
        $notifications = auth()->user()->notifications()->latest()->get();
        return view('notification.index', compact('notifications'));
    }

    public function updateAll()
    {
        $notifications = auth()->user()->notifications()->get();
        foreach ($notifications as $notification) {
            Notifications::where('id', $notification->id)->update([
                'checked' => 'checked'
            ]);
        }
        return redirect('/notification/log');
    }
}
