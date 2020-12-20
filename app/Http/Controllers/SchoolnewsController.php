<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolnewsController extends Controller
{
    public function index()
    {
        return view('schoollife.index', compact("isTeacher"));
    }
}
