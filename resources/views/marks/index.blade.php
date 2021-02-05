@extends('layouts.app')

@section('content')
<link href="{{ asset('css/marks.css') }}" rel="stylesheet">
<script src="{{ asset('js/marks.js') }}" defer></script>


<div class="container">
<div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <div>
                    <h2>Noten</h2>
                </div>
            </div>
        </div>
    </div>
    <hr class="pb-5">
    @if(!$isTeacher)
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <div class="d-block">
                    <form class="form-inline" action="/m/find" method="post">
                    @csrf
                        <div class="searchbar">
                        <input class="search_input" type="text" name="subject" placeholder="Search...">
                        <a href="#" type="submit" class="search_icon"><i class="fa-search"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            
        
        </div>
    </div>   
    @endif

    @if($isTeacher)
    <div class="row">
      <div class="col-12">
            <div class="d-flex justify-content-center">
              <h5>Wählen Sie die Eingabeform aus!</h5>
              
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <div class="d-block">
            <p class="mb-0"><b>Generieren Sie hier eine Klasse mit vordefiniertem Fach, um die Schreibarbeit zu verkürzen!</b></p>
            <form action="/m/create">
                @csrf
                <label for="class">Klasse</label>
                <input type="name" class="form-control" id="class" name="class" aria-describedby="emailHelp">

                <label for="subject">Fach</label>
                <input type="name" class="form-control" id="subject" name="subject" aria-describedby="emailHelp">

                <input type="submit" class="btn btn-success mt-3" value="Generate" />

            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <div class="d-block">
            <p class="mb-0"><b>Fügen Sie Noten für einzelne Schüler hinzu.</b></p>
            <form action="/m/create">
                @csrf
                <input type="submit" class="btn btn-success mt-3" value="Note hinzufügen" />

            </form>
          </div>
        </div>
      </div>
    </div>
    @endif

    @if (!$isTeacher)
    @foreach($subjects as $s)
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <h1>{{$s->name}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fach</th>
                        <th scope="col">Note</th>
                        <th scope="col">Bemerkung</th>
                        <th scope="col">Fachlehrer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marks as $m)
                      @if($s->name == $m->subject)
                        <tr>
                            <th scope="row">{{$m->id}}</th>
                            <td>{{$m->subject}}</td>
                            <td>{{$m->mark}}</td>
                            <td>{{$m->description}}</td>
                            <td>{{$m->teacher}}</td>
                        </tr>
                      @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection

