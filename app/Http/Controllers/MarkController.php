<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
        return view("marks.index");
    }
}
