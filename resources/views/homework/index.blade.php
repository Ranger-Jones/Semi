@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h1>Homework</h1>
            </div>
            <div class="d-flex justify-content-center">
                <p><p class="font-weight-lighter font-italic">Hier kannst du die Hausaufgaben eingetragen sehen, sowie die Übersicht über die 5 anstehenden Hausaufgaben oder Tests in den kommenden paar Tagen.</p></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-8">
            Kalender einfügen
        </div>
        <div class="col-4">
            <div class="jumbotron">
                <div class="d-flex align-content-center">
                    <h2>Deine nächsten Hausaufgaben/Arbeiten</h2>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2>Hausaufgaben Feed von {{Auth::user()->username}}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-2">
            <div class="col-8">
                test
            </div>
        </div>
    </div>

    
</div>
@endsection
