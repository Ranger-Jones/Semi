<?php

namespace App\Http\Controllers;

use App\HomeworkCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeworkCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'homework' => 'required'
        ]);

        $datadb = array(
            'homework_id' => $data['homework']
        );
        Auth::user()->checkedHomework()->create($datadb);

        return redirect('/h');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeworkCheck  $homeworkCheck
     * @return \Illuminate\Http\Response
     */
    public function show(HomeworkCheck $homeworkCheck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeworkCheck  $homeworkCheck
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeworkCheck $homeworkCheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeworkCheck  $homeworkCheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeworkCheck $homeworkCheck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeworkCheck  $homeworkCheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeworkCheck $homeworkCheck)
    {
        //
    }

    
}
