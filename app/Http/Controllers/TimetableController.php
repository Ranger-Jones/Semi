<?php

namespace App\Http\Controllers;

use App\Timetable;
use App\Grade;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class TimetableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exampledata = array();
        $client = $client = new Client();
        $crawler = $client->request('GET', 'https://sci.purepott.com');
        $result = $crawler->filter('td')->each(function ($node) {
            return $exampledata[] = $node->text();
        }); 
        return view('timetable.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if(Auth::user()->role != 'Lehrer'){
            return redirect('/t');
        }
        $subjects = [];
        $grades = [];
        $grade = "";
        $day = "";
        $timetables = [];
        
        $days = [
            'Montag',
            'Dienstag',
            'Mittwoch',
            'Donnerstag',
            'Freitag',
            'Samstag'
        ];

        $hours = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6'
        ];


        $timetables = Timetable::all();
        $subjects = Subject::all();
        $grades = Grade::all();
        

        return view('timetable.create', compact('subjects', 'grades', 'grade', 'hours', 'days', 'day', 'timetables'));
    }

    public function example()
    {
        return view('timetable.example');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
     {
      $rules = array(
       'subject.*'  => 'required',
       'day.*'  => 'required',
       'hour.*'  => 'required',
       'description.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $subjects = $request->subject;
      $days = $request->day;
      $hours = $request->hour;
      $description = $request->description;


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

 
       //$insert_data[] = $data;

       $user->marks()->create($data);

        
      }
      
      //Mark::insert($insert_data);
      return response()->json([
       'success'  => 'Umfrage wurde zu ihrem Post erfolgreich hinzugefügt'
      ]);
     }
    }
    
    public function fetch(Request $request)
    {
        if($request->ajax()){

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $timetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
        //
    }
}
