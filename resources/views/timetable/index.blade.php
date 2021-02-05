@extends('layouts.app')

@section('content')
<link href="{{ asset('css/timetable.css') }}" rel="stylesheet">
<!-- Das soll den Stundenplan wie die Noten anzeigen, also vong Layout her -->
<div class="row">
      <div class="col-12">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Stunde</th>
              <th scope="col">Fach</th>
              <th scope="col">Raum</th>
              <th scope="col">Lehrer</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($result as $r)
            <tr>
                <!-- Das ist dein Ding- keine Ahnung wie das funktioniert, sry xD -->
              <td>1.</td>
              <td>{{$r->subject}}</td>
              <td>{{$r->room}}</td>
              <td>{{$r->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
@endsection