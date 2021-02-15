<?php

namespace App\Http\Controllers;

use DB;
use App\Grade;
use App\User;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();
        $unset_user = User::where('inclass', 'unset')->get()->toArray();
        $unset_user2 = User::where('inclass', null)->get()->toArray();
        $unset_user = array_merge($unset_user, $unset_user2);
        //dd($grades);
        return view("admin.grade.index", compact("grades", 'unset_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $teacher = User::where('role', 'Lehrer')->get();
        $students = User::where('role',  'Schüler')->get();
        
        return view("admin.grade.create", compact('users', 'teacher', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'teacher' => 'required',
            'classe' => 'required',
            'students.*' => 'required'
        ]);

        $students = $request->students;
        $users = [];

        if($students != []){
            foreach ($students as $s) {
                $users[] = User::where("username", $s)->first();
            }
        }

        $datadb=array(
            'teacher' => $data['teacher'],
            'name' => $data['classe']
        );

        

        Grade::create($datadb);

        if($users != []){
            foreach ($users as $user) {
                $user->inclass = $datadb['name'];
                $user->save();
            }
        }

        return redirect('/a/grades');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade_id)
    {
        $users = User::where('inclass', $grade_id->name)->get();

        return view('admin.grade.show', compact('grade_id', 'users'));
    }

    public function delete(Grade $grade_id)
    {
        $user = User::where('inclass', $grade_id->name)->get();
        foreach ($user as $u) {
            $u->inclass = "unset";
            $u->save();
        }
        Grade::destroy($grade_id->id);
        return redirect('/a/grades');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade_id)
    {
        $students = User::where('inclass', $grade_id->name)->get();
        $teacher = $grade_id->teacher;
        
        //Select all teachers -- again :()
        $teachers = [];
        $users = User::all();
        foreach($users as $u){
            $permissions = $u->permissions()->get();
            foreach ($permissions as $p) {
                if($p->permission == "Lehrer"){
                    $teachers[] = $u;
                }
            }
        }

        $users = User::where('inclass', '!=', $grade_id->name)->get();

        return view('admin.grade.edit', compact('grade_id', 'teachers', 'teacher', 'users', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade_id)
    {
        $data = request()->validate([
            'teacher' => 'required',
            'classe' => 'required',
            'students.*' => 'required'
        ]);

        $students = $request->students;
        $old_users = User::where('inclass', $grade_id->name)->get();
        foreach($old_users as $old){
            $old->inclass = 'unset';
            $old->save();
        }
        $users = [];

        if($students != []){
            foreach ($students as $key=>$value) {
                $users[$key] = User::where("name", $students[$key])->first();
            }
        }

        $datadb = array(
            'teacher' => $data['teacher'],
            'name' => $data['classe']
        );

        if($datadb['teacher'] != ''){
            Grade::where('id', $grade_id->id)->update(['teacher'=>$datadb['teacher']]);
        }

        if($datadb['name'] != ''){
            Grade::where('id', $grade_id->id)->update(['name'=>$datadb['name']]);
        }

        
        

            
        
        foreach ($users as $user) {
            $user->inclass = $datadb['name'];
            $user->save();
            
        }
           // dd($users);
        //dd($old_users);

        return redirect('/a/grades/'.$grade_id->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
