<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Post;

class VotePollController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Post $postid, Poll $poll)
    {
        $data = request()->validate([
            'voting' => ['required']
        ]);

        $poll = Poll::where('id', $data['voting'])->first();
        
        
        $votes = $poll->votes;
        $votes++;
        Poll::where('id', $data['voting'])->update(['votes' => $votes]);
        $postid->votedPeople()->attach(auth()->user());
        auth()->user()->votes()->attach($poll);
        return redirect('/p/' . $postid->id);
    }
}
