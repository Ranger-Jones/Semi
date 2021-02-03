<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Homework;
use App\Subject;
use App\Grade;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Homework $homework)
    {
        $user = auth()->user();
        $u_subjects = $user->subject;
        $homeworks = Homework::all();
        $subjects = [];
        $grades = [];

        $permissions = $user->permissions()->get();
        $isTeacher = false;
        $checkedHomework = Auth::user()->checkedHomework()->select('homework_id')->get()->toArray();
        $uncheckedHomework = [];
        $uncheckedHomeworkId = [];

        foreach($permissions as $p){
            if($p->permission == "Lehrer"){
                $isTeacher = true;
            }
        }

        if(!$isTeacher){
            try {
                $u_subjects = preg_split('~;~', $u_subjects);
                
                //removes unimportant records
                $last = array_key_last($u_subjects);
                unset($u_subjects[$last]);
                
                
                
                
            } catch (Exception $e) {
                dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
            }

            $subjects = Subject::select('name')
                ->whereIn('id', $u_subjects)
                ->get();

            $homeworks = Homework::where('inclass', $user->inclass)->get();

            $uncheckedHomework = Homework::where('inclass', $user->inclass)
                ->whereNotIn('id', $checkedHomework)
                ->get();
            
            $uncheckedHomeworkId = Homework::select('id')
            ->where('inclass', $user->inclass)
            ->whereNotIn('id', $checkedHomework)
            ->get()
            ->toArray();
            /*
            foreach($homeworks as $h){
                foreach($checkedHomework as $ch){
                    foreach($subjects as $s){
                        if($h->id != $ch->homework_id && $s->name == $h->subject){
                            $uncheckedHomework[] = $h;
                        }
                    }
                }
            }

            */

        }
        else{
            $subjects = Subject::where('teacher', $user->name)->get();
            $homeworks = Homework::where('teacher', $user->name)->get();
            $grades = Grade::where('teacher', $user->name)->get();
        }


        return view('homework.index', compact('user', 'uncheckedHomeworkId', 'homeworks', 'subjects', 'isTeacher', 'grades', 'uncheckedHomework'));
    }

    public function create()
    {
        $permissions = Auth::user()->permissions()->get();
        $isTeacher = false;
        $user = Auth::user();

        foreach($permissions as $p){
            if($p->permission == "Lehrer"){
                $isTeacher = true;
            }
        }

        if(!$isTeacher){
            return redirect('/h');
        }

        $subjects = Subject::where('teacher', $user->name)->get();
        $homeworks = Homework::where('teacher', $user->name)->get();
        $grades = Grade::where('teacher', $user->name)->get();
        
        return view('homework.create', compact('isTeacher', 'subjects', 'homeworks', 'grades', 'user'));
    }

    public function store(Homework $homework)
    {
        $data = request()->validate([
            'caption' => ['required', 'max:55'],
            'task' => ['required', 'max:55000'],
            'subject' => ['required'],
            'image' => ['image','mimes:jpeg,png,jpg,gif,svg','max:16000'],
            'date' => ['max:55']
        ]);
        if(request('image') != null){
            $imagePath = request('image')->store('homework', 'public');
        }
        else{
            $imagePath = "\uploads\pWLN9ASDKZgdUHZjaCg8sMebKvMuuYHbzATi1Gcd.jpeg";
        }

        if(!request('submissionDate')){
            $submissionDate = "N/A";
        }
        else{
            $submissionDate = $data['date'];
        }

        $raw_data_subject = preg_split('~ - ~', $data['subject']);

        $inclass = $raw_data_subject[1];
        $subject = $raw_data_subject[0];;

        $currentDate = date('m/d/Y h:i:s a', time());
        

        $datadb=array(
            'caption'=>$data['caption'],
            'task'=>$data['task'],
            'inclass'=> $inclass,
            'subject'=> $subject,
            'images'=>$imagePath,
            'teacher'=>auth()->user()->name,
            'submissionDate'=>$submissionDate,
            'currentDate'=> $currentDate
        );

        $users = User::whereColumn([
                ['subject', '=', $inclass],
                ['inclass', '=', $subject]
            ])->get();

        foreach ($users as $user) {
            $notification_data = array(
                'sender' => $data['teacher'],
                'receiver' => $user->username,
                'content' => 'Neue Hausaufgabe in ' . $subject,
                'type' => 'Hausaufgabe',
                'checked' => 'unchecked'
            );
            $user->notifications()->create($notification_data);
        }

        DB::table('homework')->insert($datadb);

        $h = DB::table('homework')->where('currentDate', $currentDate)->first();

        return redirect('/h/' . $h->id);
    }

    public function show(\App\Homework $homework)
    {
        return view('homework.show', compact('homework'));
    }
}
