<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserUpdateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = auth()->user();
        $this->authorize('update', $user->profile);
        return view('userupdate.edit', compact('user'));
    }

    public function update()
    {
        
    }
}
