<?php

namespace App\Http\Controllers;

use App\User;
use App\Subject;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserUpdateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = Auth::user();
        $subjects = Subject::where('classe', $user->inclass)->get();

        //dd($getClass);

        return view('userupdate.edit', compact('user', 'subjects'));
    }

    public function update(User $user, Request $request)
    {
        $user = Auth::user();
        $data = request()->validate([
            'subject.*' => 'required'
        ]);
        
        $subjects = $request->subject;
        $subjectids = array_keys($subjects);
        $subjectString = "";

        foreach($subjectids as $s){
            $subjectString =  $subjectString.strval($s).";";
        }
        
        $user->subject = $subjectString;
        $user->save();

        return redirect("/profile/{$user->id}");
        
    }
}
