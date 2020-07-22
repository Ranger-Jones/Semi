@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h1>Hausaufgaben</h1>
            </div>
            <div class="d-block">
                <p class="font-weight-lighter font-italic">Hier kannst du die Hausaufgaben eingetragen sehen, sowie die Übersicht über die 5 anstehenden Hausaufgaben oder Tests in den kommenden paar Tagen.</p>   
                <div class="d-flex justify-content-center">
                    <a href="/h/create" class="btn btn-primary btn-lg">Hausaufgabe hinzufügen</a>
                </div>         
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-8">

        // kannst du den Button oben in die Mitte machen? ich bekomme es iwie nicht hin        </div>
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
                <h2>Hausaufgaben von {{Auth::user()->username}}</h2>
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
                                <span class="badge badge-primary">{{ $homework->subject }}</span>
                            </h4>

                            // der Button soll eigentlich rechts neben den Text und die Hausaufgabe entfernen, nachdem das ganze nochmal klassisch bestätigt wurde
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
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
