<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolnewsController extends Controller
{
    public function index()
    {
        $isTeacher = false;
        $permissions = auth()->user()->permissions()->get();
        foreach($permissions as $p){
            if($p->permission == "Lehrer"){
                $isTeacher = true;
            }
        }
        return view('schulnews.index', compact("isTeacher"));
    }

    public function create(){
        return view('schulnews.create');
    }

    public function show(){
        return view('schulnews.show');
    }
}
