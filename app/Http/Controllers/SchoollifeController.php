<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schoolnews;
class SchoollifeController extends Controller
{
    public function index()
    {
        $lastarticles = Schoolnews::orderby('created_at', 'desc')->take(3)->get();
        $articles = Schoolnews::orderby('created_at', 'desc')->get();
        return view('schoollife.index', compact('lastarticles', 'articles'));
    }

    public function intro(){
        if(auth()->user() == null){
            return view('schoollife.intro');
        }
        else{
            return redirect('/vbg');
        }
    }
}
