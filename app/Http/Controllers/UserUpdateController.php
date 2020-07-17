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

        $allSubjects = [
            'biologie' => 'unchecked',
            'deutsch' => 'unchecked',
            'mathematik' => 'unchecked',
            'chemie' => 'unchecked',
            'physik' => 'unchecked',
        ];

        try {
            $subjects = preg_split('~:~', $getSubjects);

            //removes unimportant records
            unset($subjects[0]);
            $last = array_key_last($subjects);
            unset($subjects[$last]);

            if( isset($subjects[1])){
                $subjects[1] = str_replace('"', '', $subjects[1]);
            }

        } catch (Exception $e) {
            dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
        }

        foreach ($allSubjects as $s) {
            foreach ($subjects as $subject) {
                if($s !== $subject){
                    $allSubjects[$subject] = 'checked';
                }
            }
        }

        //dd($getClass);

        return view('userupdate.edit', compact('user', 'allSubjects'));
    }

    public function update(User $user)
    {
        $subjects = request()->validate([
            'biologieCheckN' => '',
            'deutschCheckN' => '',
            'physikCheckN' => '',
            'mathematikCheckN' => '',
            'chemieCheckN' => '',
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
                        'inclass' => $inclass['inclass']
                        ]);

        //dd($subjectArray);

        return redirect("/profile/{$user->id}");
        
    }
}
