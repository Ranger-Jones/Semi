<?php

namespace App\Http\Controllers;

use App\User;
use DB;
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

        $getSubjects = User::select('subject')->where('id', $user->id)->get();

        $subjects = explode(':', $getSubjects);

        //removes unimportant records
        unset($subjects[0]);
        $last = array_key_last($subjects);
        unset($subjects[$last]);

        dd($subjects);
        return view('userupdate.edit', compact('user', 'subjects'));
    }

    public function update(User $user)
    {
        $subjects = request()->validate([
            'biologieCheckN' => '',
            'DeutschCheckN' => '',
            'PhysikCheckN' => '',
            'MathematikCheckN' => '',
            'ChemieCheckN' => '',
        ]);

        $inclass = request()->validate([
            'inclass' => ''
        ]);

        $subjectText = "";
        
        foreach ($subjects as $subject) {
            if($subject !== ''){
                $subjectText = $subjectText . $subject . ":";
            }
        }

        $updateUser = DB::table('users')->where('id', $user->id)->update([
                        'subject' => $subjectText,
                        'inclass' => $inclass
                        ]);

        //dd($subjectArray);

        return redirect("/profile/{$user->id}");
        
    }
}
