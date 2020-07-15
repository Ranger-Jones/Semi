<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user, Homework $homework)
    {
        $homework = Post::orderBy(DB::raw('id = 5'), 'DESC')
                        ->orderBy('created_at', 'desc');
        return view('homework.index', compact('user'));
    }

    public function create()
    {
        return view('homework.create');
    }

    public function store(Homework $homework)
    {
        $data = request()->validate([
            'caption' => ['required', 'max:55'],
            'task' => ['required', 'max:55000'],
            'inclass' => ['required'],
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

        $currentDate = date('m/d/Y h:i:s a', time());

        $datadb=array(
            'caption'=>$data['caption'],
            'task'=>$data['task'],
            'inclass'=>$data['inclass'],
            'subject'=>$data['subject'],
            'images'=>$imagePath,
            'teacher'=>auth()->user()->username,
            'submissionDate'=>$submissionDate,
            'currentDate'=> $currentDate
        );
        DB::table('homework')->insert($datadb);

        $h = DB::table('homework')->where('currentDate', $currentDate)->first();

        return redirect('/h/' . $h->id);
    }

    public function show(\App\Homework $homework)
    {
        return view('homework.show', compact('homework'));
    }
}
