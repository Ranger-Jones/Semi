<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mark;
use App\User;
use App\Subject;
use App\Notification;
use Validator;
use Illuminate\Support\Facades\Auth;

class MarkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $marks = Mark::where('user', auth()->user()->name)->get();

        $u_subjects = auth()->user()->subject;

        $subjects = [];

        try {
            $u_subjects = preg_split('~;~', $u_subjects);
            
            //removes unimportant records
            $last = array_key_last($u_subjects);
            unset($u_subjects[$last]);
            
            
            
            
        } catch (Exception $e) {
            dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
        }
        
        $subjects = Subject::where('classe', Auth::user()->inclass)->get();


        $marks = Auth::user()->marks()->get();

        //dd($subjects);
        
        
        

        //Check if user is a teacher

        $role = auth()->user()->role;

        $subject_class = [];
        if($role == 'Lehrer'){
            $subject_class = Subject::where('teacher', auth()->user()->name)->get();
        }

        return view("marks.index", compact('role', 'subjects', 'marks', 'subject_class'));
    }

    //redirect with pregeneradet form for teacher to beeing faster in their working flow
    public function manage(){
        $data = request()->validate([
            'subject_class' => ['required', 'max:55']
        ]);

        $raw_subject_class = preg_split('~ - ~', $data['subject_class']);

        $class = $raw_subject_class[1];
        $subject = $raw_subject_class[0];

        return redirect('/m/create/'.$class.'/'.$subject);
    }

    public function create()
    {   

        //get data for pregenerate form for teacher
        $class = "";
        $subject = "";
        $error = "";

        //get the data from the form, if neccessary;
        try {
            $data = request()->validate([
                'subject_class' => ['required', 'max:55']
            ]);
    
            $raw_subject_class = preg_split('~ - ~', $data['subject_class']);
    
            $class = $raw_subject_class[1];
            $subject = $raw_subject_class[0];
        } catch (\Throwable $th) {
            $error = "Can't generate data from user input, no input available";
        }
        


        //Check if user is a teacher
        $role = auth()->user()->role;
        
        
        $usernames = [];

        //proof that user is a teacher
        if($role != "Lehrer"){
            return redirect('/m');
        }

        //get all users
        $users = User::all();

        //allsubjects for select
        $subjects = Subject::where('teacher', auth()->user()->name)->get();

        foreach ($users as $user) {
            $usernames[] = $user->name;
        }

        //filter selected users by teachers choice
        $s_users = [];

        

        if($subject != '' || $class != ''){

            // get subject id to fetch users
            $subjectid = Subject::where([['teacher', auth()->user()->name], ['classe', $class], ['name', $subject]])->first();

            //List neccessary usernames, by teachers choice
            foreach ($users as $u) {
                //Get users subjects
                $u_subjects = $u->subject;
                $inclass = $u->inclass;

                if($inclass == $class){
                    
                    try {
                        $u_subjects = preg_split('~;~', $u_subjects);
                        
                        //removes unimportant records
                        $last = array_key_last($u_subjects);
                        unset($u_subjects[$last]);
                    } catch (Exception $e) {
                        dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
                    }
                    foreach ($u_subjects as $us) {
                        if($subjectid->id == $us){
                            $s_users[] = $u;
                        }
                    }
                }

                
            }
        }

        return view("marks.create", compact('usernames', 'subjects', 'class', 'subject', 'error', 's_users'));
    }

    public function insert(Request $request)
    {
    
     if($request->ajax())
     {
      $rules = array(
       'name.*'  => 'required',
       'subject.*'  => 'required',
       'mark.*'  => 'required',
       'description.*'  => 'required',
       'teacher.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $names = $request->name;
      $subject = $request->subject;
      $mark = $request->mark;
      $description = $request->description;
      $teacher = $request->teacher;

      for($count = 0; $count < count($names); $count++)
      {
        $user = User::where("name", $names[$count])->first();
        $class = $user->inclass;

        //standard class == A21/1 for preventing errors
        if($class == null)
            $class = "A21/1";

       $data = array(
        'user'  => $names[$count],
        'inclass' => $class,
        'subject' => $subject[$count],
        'mark' => $mark[$count],
        'description' => $description[$count],
        'teacher' => $teacher[$count],
        'currentDate' => date("Y-m-d h:i:sa")
       );

       $notificaction_data = array(
           'sender' => $teacher[$count],
           'receiver' => $names[$count],
           'content' => 'Neue Note: ' . $mark[$count] . ' in ' . $subject[$count] . '; Bemerkung: '. $description[$count],
           'type' => 'Note',
           'checked' => 'unchecked'
       );
       //$insert_data[] = $data;

       //Inser Data into user accounts
       $user->notifications()->create($notificaction_data);
       $user->marks()->create($data);

        
      }
      
      //Mark::insert($insert_data);
      return response()->json([
       'success'  => 'Umfrage wurde zu ihrem Post erfolgreich hinzugefügt'
      ]);
     }
    }

    public function find()
    {
        $data = request()->validate([
            'subject' => ['required']
        ]);

        return redirect('/m/show/'.$data['subject']);
    }

    public function show($search)
    {

        $marks = Mark::where('user', auth()->user()->name)->get();
        if($marks == []){
            return redirect('/m');
        }

        
        $result = [];


        foreach ($marks as $mark) {
            if ($mark->subject == $search || $mark->teacher == $search || $mark->mark == $search || $mark->currentDate == $search || $mark->description == $search){
                $result[] = $mark;
            }
        }

        //$marks = Mark::where();
        return view('marks.show', compact('result', 'search'));
    }
}
