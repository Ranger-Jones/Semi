<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoollifeController extends Controller
{
    public function index()
    {
        return view('schoollife.index');
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
