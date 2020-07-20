<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Post;

class VotePollController extends Controller
{


    public function store(Post $postid)
    {
        $data = request()->validate([
            'voting' => ['required']
        ]);
        $votedpoll = Poll::where('id', $data['voting'])->first();
        //dd($votedpoll);
        
        auth()->user()->votes()->toggle($votedpoll);
        return redirect('/p/' . $postid);
    }
}
