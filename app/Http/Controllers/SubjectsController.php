<?php

namespace App\Http\Controllers;

use App\Subject;
use App\User;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();

        return view("admin.subject.index", compact("subjects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $users = User::all();
        $teacher = [];
        $userpermissions = [];

       
        foreach ($users as $u) {
            $userpermissions = $u->permissions()->get();
            foreach ($userpermissions as $p) {
                if($p->permission == "Lehrer"){
                    $teacher[] = $u->name;
                }
            }
        }
     

        
        
        
        return view("admin.subject.create", compact("subjects", "teacher"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
