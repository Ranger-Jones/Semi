<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoollifeController extends Controller
{
    public function index()
    {
        return view('schoollife.index');
    }
}
