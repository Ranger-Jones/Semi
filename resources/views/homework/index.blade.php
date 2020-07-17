@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h1>Homework</h1>
            </div>
            <div class="d-block justify-content-center">
                <p class="font-weight-lighter font-italic">Hier kannst du die Hausaufgaben eingetragen sehen, sowie die Übersicht über die 5 anstehenden Hausaufgaben oder Tests in den kommenden paar Tagen.</p>
                <button class="btn btn-success"><a href="/h/create" class="white-link">Create Homework</a></button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-8">
        @foreach($subjects as $subject)
            {{$subject}}<br>
        @endforeach
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

    @foreach($homeworks as $homework)
        @foreach($subjects as $subject)
            @if (strtolower($homework->subject) == strtolower($subject) && $homework->inclass == $user->inclass)
                <div class="row offset-3">
                    <a href="/h/{{$homework->id}}">
                        <div class="col-12 d-block">
                            <h4 class="pr-5">{{ $homework->caption }}
                                <span class="badge badge-success">{{ $homework->subject }}</span>
                            </h4>
                            <div class="d-flex">
                                <p class="font-weight-lighter">{{ $homework->teacher }}</p>
                                <p class="font-weight-lighter pl-4">erstellt am {{ $homework->currentDate }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    @endforeach

    
</div>
@endsection
