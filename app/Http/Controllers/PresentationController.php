<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function index(){
        return view('presentation.index');
    }

    public function quellen(){
        return view('presentation.quellen');
    }
}
