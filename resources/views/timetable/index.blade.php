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

            <tr>
                <!-- Das ist dein Ding- keine Ahnung wie das funktioniert, sry xD -->
                <!-- Du Kek ~Jones -->
                @foreach($result as $key => $value)
                  <td>{{$value}}</td>
                  @if($key == 3 || $key == 7 || $key == 12)
                  </tr><tr>
                  @endif
                @endforeach
            </tr>
           
            
          </tbody>
        </table>
      </div>
    </div>
@endsection