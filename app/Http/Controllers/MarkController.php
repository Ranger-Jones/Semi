<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mark;
use App\User;
use App\Notification;
use Validator;

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

        try {
            $u_subjects = preg_split('~:~', $u_subjects);
            
            //removes unimportant records
            $last = array_key_last($u_subjects);
            unset($u_subjects[$last]);
            
            
            
            
        } catch (Exception $e) {
            dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
        }

        
        //---Liste aller Unterrichtsfächer als je einzelnes array---//
        $deutsch = 
        $mathe = 
        $info = 
        $physik = 
        $chemie = 
        $biologie = 
        $franz = 
        $englisch = 
        $astronomie = 
        $sport = 
        $kunst = 
        $musik = 
        $mnt = 
        $nwut = 
        $dg = 
        $latein = 
        $sozi =
        $geschichte = 
        $religion = 
        $ethik = [];

        //---Liste aller Notendurschschnitte als je einzelne Variable---//
        $deutschS = 
        $matheS = 
        $infoS = 
        $physikS = 
        $chemieS = 
        $biologieS = 
        $franzS = 
        $englischS = 
        $astronomieS = 
        $sportS = 
        $kunstS = 
        $musikS = 
        $mntS = 
        $nwutS = 
        $dgS = 
        $lateinS = 
        $soziS =
        $geschichteS = 
        $religionS = 
        $ethikS = 0;
        
        foreach ($marks as $mark) {
            if ($mark->subject == 'Deutsch' && in_array('deutsch', $u_subjects)) {
                $deutsch[] = $mark;
                $deutschS += $mark->mark;
            }
            else if($mark->subject == 'Mathematik' && in_array('mathematik', $u_subjects)){
                $mathe[] = $mark;
                $matheS += $mark->mark;
            }
            else if($mark->subject == 'Physik' && in_array('physik', $u_subjects)){
                $physik[] = $mark;
                $physikS += $mark->mark;
            }
            else if($mark->subject == 'Informatik' && in_array('informatik', $u_subjects)){
                $info[] = $mark;
                $infoS += $mark->mark;
            }
            else if($mark->subject == 'Ethik' && in_array('ethik', $u_subjects)){
                $ethik[] = $mark;
                $ethikS += $mark->mark;
            }
            else if($mark->subject == 'Religion' && in_array('religion', $u_subjects)){
                $religion[] = $mark;
                $religionS += $mark->mark;
            }
            else if($mark->subject == 'Biologie' && in_array('biologie', $u_subjects)){
                $biologie[] = $mark;
                $biologieS += $mark->mark;
            }
            else if($mark->subject == 'Naturwissenschaften & Technik' && in_array('naturwissenschaften & technik', $u_subjects)){
                $nwut[] = $mark;
                $nwutS += $mark->mark;
            }
            else if($mark->subject == 'Mensch, Natur, Technik' && in_array('mensch, natur, technik', $u_subjects)){
                $mnt[] = $mark;
                $mntS += $mark->mark;
            }
            else if($mark->subject == 'Französisch' && in_array('französisch', $u_subjects)){
                $franz[] = $mark;
                $franzS += $mark->mark;
            }
            else if($mark->subject == 'Latein' && in_array('latein', $u_subjects)){
                $latein[] = $mark;
                $lateinS += $mark->mark;
            }
            else if($mark->subject == 'Sport' && in_array('sport', $u_subjects)){
                $sport[] = $mark;
                $sportS += $mark->mark;
            }
            else if($mark->subject == 'Kunst' && in_array('kunst', $u_subjects)){
                $kunst[] = $mark;
                $kunstS += $mark->mark;
            }
            else if($mark->subject == 'Musik' && in_array('musik', $u_subjects)){
                $musik[] = $mark;
                $musikS += $mark->mark;
            }
            else if($mark->subject == 'Astronomie' && in_array('astronomie', $u_subjects)){
                $astronomie[] = $mark;
                $astronomieS += $mark->mark;
            }
            else if($mark->subject == 'Geschichte' && in_array('geschichte', $u_subjects)){
                $geschichte[] = $mark;
                $geschichteS += $mark->mark;
            }
            else if($mark->subject == 'Darstellen & Gestalten' && in_array('darstellen & gestalten', $u_subjects)){
                $dg[] = $mark;
                $dgS += $mark->mark;
            }
            else if($mark->subject == 'Sozialkunde' && in_array('sozialkunde', $u_subjects)){
                $sozi[] = $mark;
                $soziS += $mark->mark;
            }
        }

        $zero = (object) [
            'mark' => 0,
            'description' => '',
            'currentDate' => '',
            'teacher' => ''
        ];


        //Berechnung des Notendurchschnittess
        if(!$sozi == []){
            $soziS /= count($sozi);
        }

        if(!$deutsch == []){
            $deutschS /= count($deutsch);
        }

        if(!$mathe == []){
            $matheS /= count($mathe);
        }

        if(!$religion == []){
            $religionS /= count($religion);
        }

        if(!$ethik == []){
            $ethikS /= count($ethik);
        }

        if(!$kunst == []){
            $kunstS /= count($kunst);
        }

        if(!$chemie == []){
            $chemieS /= count($chemie);
        }

        if(!$biologie == []){
            $biologieS /= count($biologie);
        }

        if(!$physik == []){
            $physikS /= count($physik);
        }

        if(!$info == []){
            $infoS /= count($info);
        }

        if(!$franz == []){
            $franzS /= count($franz);
        }

        if(!$englisch == []){
            $englischS /= count($englisch);
        }

        if(!$dg == []){
            $dgS /= count($dg);
        }

        if(!$astronomie == []){
            $astronomieS /= count($astronomie);
        }

        if(!$mnt == []){
            $mntS /= count($mnt);
        }

        if(!$musik == []){
            $musikS /= count($musik);
        }

        if(!$nwut == []){
            $nwutS /= count($nwut);
        }

        if(!$latein == []){
            $lateinS /= count($latein);
        }

        if(!$sport == []){
            $sportS /= count($sport);
        }

        if(!$geschichte == []){
            $geschichteS /= count($geschichte);
        }

        

        //Check if user is a teacher

        $isTeacher = false;

        foreach (auth()->user()->permissions as $p) {
            if($p->permission == "Lehrer"){
                $isTeacher = true;
            }
        }

        return view("marks.index", compact('deutsch', 'mathe', 'physik', 'info',
         'ethik', 'religion', 'geschichte', 'sozi', 'latein', 'dg', 'nwut', 'mnt', 
         'musik', 'kunst', 'sport', 'astronomie', 'englisch', 'franz', 'biologie', 'chemie', 
         'deutschS', 'matheS', 'physikS', 'infoS',
         'ethikS', 'religionS', 'geschichteS', 'soziS', 'lateinS', 'dgS', 'nwutS', 'mntS', 
         'musikS', 'kunstS', 'sportS', 'astronomieS', 'englischS', 'franzS', 'biologieS', 'chemieS', 'isTeacher'));
    }

    //redirect with pregeneradet form for teacher to beeing faster in their working flow
    public function manage(){
        $data = request()->validate([
            'class' => ['required', 'max:55'],
            'subject' => ['required', 'max:55']
        ]);

        $class = $data['class'];
        $subject = $data['subject'];


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
                'class' => ['required', 'max:55'],
                'subject' => ['required', 'max:55']
            ]);
    
            $class = $data['class'];
            $subject = $data['subject'];
        } catch (\Throwable $th) {
            $error = "Can't generate data from user input, no input available";
        }
        


        //Check if user is a teacher
        $permissions = auth()->user()->permissions()->get();
        $authorized = false;
        //catch users permission
        foreach ($permissions as $permission) {
            if($permission->permission == "Lehrer"){
                $authorized = true;
            }
        }
        
        $usernames = [];
        $subjects = [];

        //proof that user is a teacher
        if($authorized == false){
            return redirect('/m');
        }

        //get all users
        $users = User::all();

        //allsubjects for select
        $subjects = [
            'Deutsch',
            'Mathematik',
            'Biologie',
            'Chemie',
            'Sport',
            'Kunst',
            'Englisch',
            'Französisch',
            'Latein',
            'Geschichte',
            'Sozialkunde',
            'Relgion',
            'Ethik',
            'Mensch, Natur, Technik',
            'Naturwissenschaften & Technik',
            'Musik',
            'Darstellen & Gestalten',
            'Physik',
            'Informatik'
        ];

        foreach ($users as $user) {
            $usernames[] = $user->name;
        }

        //filter selected users by teachers choice
        $s_users = [];

        

        if($subject != '' || $class != ''){
            //List neccessary usernames, by teachers choice

            foreach ($users as $u) {
                //Get users subjects
                $u_subjects = $u->subject;
                $inclass = $u->inclass;
                

                if($inclass == $class){
                    
                    try {
                        $u_subjects = preg_split('~:~', $u_subjects);
                        
                        //removes unimportant records
                        $last = array_key_last($u_subjects);
                        unset($u_subjects[$last]);
                        
                        
                        
                        
                    } catch (Exception $e) {
                        dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
                    }

                    
                    
                    //select the users with the right class and the right subject
                    foreach ($u_subjects as $s) {
                        if($s == strtolower($subject)){
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

        $marks = Mark::where('user', auth()->user()->username)->get();
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
