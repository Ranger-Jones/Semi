@extends('layouts.app')

@section('content')
<div class="container offset-3">
    <div class="row">
        <div class="col-12 d-block">
            <div class="d-flex">
                <h2>{{ $homework->caption }}<span class="badge badge-secondary">{{ $homework->subject }}</span></h2>
            </div>
            <div class="d-flex justify-content-left">
                <div class="d-flex justify-content-center">
                    <p class="font-weight-lighter">von {{ $homework->teacher }} erstellt am {{ $homework->currentDate }}</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="font-weight-bold">Bilder:</p>
            <img src="{{ $homework->images }}" alt="Hausaufgabenbild">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="font-weight-bold">Aufgabenstellung</p><br>
            <p>{{ $homework->task }}</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <p>Erledige diese Hausaufgabe bis zum {{ $homework->submissionDate}}</p>
        </div>
    </div>
    
    
</div>
@endsection
