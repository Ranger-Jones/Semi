<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index(User $user)
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        return view('homework.index', compact('user', 'users'));
    }

    public function create()
    {
        return view('homework.create');
    }

    public function store()
    {
        
    }

    public function show()
    {
        return view('homework.show');
    }
}
