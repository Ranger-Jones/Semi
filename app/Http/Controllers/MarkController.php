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
            if ($mark->subject == 'Deutsch') {
                $deutsch[] = $mark;
                $deutschS += $mark->mark;
            }
            else if($mark->subject == 'Mathematik'){
                $mathe[] = $mark;
                $matheS += $mark->mark;
            }
            else if($mark->subject == 'Physik'){
                $physik[] = $mark;
                $physikS += $mark->mark;
            }
            else if($mark->subject == 'Informatik'){
                $info[] = $mark;
                $infoS += $mark->mark;
            }
            else if($mark->subject == 'Ethik'){
                $ethik[] = $mark;
                $ethikS += $mark->mark;
            }
            else if($mark->subject == 'Religion'){
                $religion[] = $mark;
                $religionS += $mark->mark;
            }
            else if($mark->subject == 'Biologie'){
                $biologie[] = $mark;
                $biologieS += $mark->mark;
            }
            else if($mark->subject == 'Naturwissenschaften & Technik'){
                $nwut[] = $mark;
                $nwutS += $mark->mark;
            }
            else if($mark->subject == 'Mensch, Natur, Technik'){
                $mnt[] = $mark;
                $mntS += $mark->mark;
            }
            else if($mark->subject == 'Französisch'){
                $franz[] = $mark;
                $franzS += $mark->mark;
            }
            else if($mark->subject == 'Latein'){
                $latein[] = $mark;
                $lateinS += $mark->mark;
            }
            else if($mark->subject == 'Sport'){
                $sport[] = $mark;
                $sportS += $mark->mark;
            }
            else if($mark->subject == 'Kunst'){
                $kunst[] = $mark;
                $kunstS += $mark->mark;
            }
            else if($mark->subject == 'Musik'){
                $musik[] = $mark;
                $musikS += $mark->mark;
            }
            else if($mark->subject == 'Astronomie'){
                $astronomie[] = $mark;
                $astronomieS += $mark->mark;
            }
            else if($mark->subject == 'Geschichte'){
                $geschichte[] = $mark;
                $geschichteS += $mark->mark;
            }
            else if($mark->subject == 'Darstellen & Gestalten'){
                $dg[] = $mark;
                $dgS += $mark->mark;
            }
            else if($mark->subject == 'Sozialkunde'){
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

        return view("marks.index", compact('deutsch', 'mathe', 'physik', 'info',
         'ethik', 'religion', 'geschichte', 'sozi', 'latein', 'dg', 'nwut', 'mnt', 
         'musik', 'kunst', 'sport', 'astronomie', 'englisch', 'franz', 'biologie', 'chemie', 
         'deutschS', 'matheS', 'physikS', 'infoS',
         'ethikS', 'religionS', 'geschichteS', 'soziS', 'lateinS', 'dgS', 'nwutS', 'mntS', 
         'musikS', 'kunstS', 'sportS', 'astronomieS', 'englischS', 'franzS', 'biologieS', 'chemieS',));
    }

    public function create()
    {
        $permissions = auth()->user()->permissions()->get();
        $authorized = false;
        foreach ($permissions as $permission) {
            if($permission->permission == "Lehrer"){
                $authorized = true;
            }
        }

        if($authorized == false){
            return redirect('/m');
        }

        $users = User::all();

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

        $classes = [
            '5a',
            '6a',
            '7a',
            '8a',
            '9a',
            '10a',
            '11a',
            '12a',
        ];

        $usernames = [];

        foreach ($users as $user) {
            $usernames[] = $user->name;
        }

        return view("marks.create", compact('usernames', 'classes', 'subjects'));
    }

    public function insert(Request $request)
    {
    
     if($request->ajax())
     {
      $rules = array(
       'name.*'  => 'required',
       'inclass.*'  => 'required',
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
      $inclass = $request->inclass;
      $subject = $request->subject;
      $mark = $request->mark;
      $description = $request->description;
      $teacher = $request->teacher;

      for($count = 0; $count < count($names); $count++)
      {
       $data = array(
        'user'  => $names[$count],
        'inclass' => $inclass[$count],
        'subject' => $subject[$count],
        'mark' => $mark[$count],
        'description' => $description[$count],
        'teacher' => $teacher[$count],
        'currentDate' => date("Y-m-d h:i:sa")
       );

       $notifaction_data = array(
           'sender' => $teacher[$count],
           'receiver' => $names[$count],
           'content' => 'Neue Note: ' . $mark[$count] . ' in ' . $subject[$count] . '; Bemerkung: '. $description[$count],
           'type' => 'Note',
           'checked' => 'unchecked'
       );

       $user = User::where("username", $names[$count])->first();
       $user->notifications()->create($notifaction_data);

       $insert_data[] = $data; 
      }
      
      Mark::insert($insert_data);
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
