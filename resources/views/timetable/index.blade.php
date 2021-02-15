@extends('layouts.app')

@section('content')
<link href="{{ asset('css/timetable.css') }}" rel="stylesheet">
<!-- Das soll den Stundenplan wie die Noten anzeigen, also vong Layout her -->
<div class="container">
  
    <div class="d-flex justify-content-center">            
      <h1>Stundenplan</h1>
      <p></p>
      </div> 
      <div class="row">
          <div class="col-sm-4">
              <p>Klasse: {{auth()->user()->inclass}}</p>               
          </div>
          <div class="col-sm-4">
              <p>Datum: Mittwoch, 13.09.2043</p>               
           </div>
          <div class="col-sm-4">
              <p>Letzte Änderung: 12.09.2043</p>               
          </div>
      </div>
     
    <!-- Stundenplan Timetable -->
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

    <hr class="pb-3">

    <!-- Button zum Einklappen des Stundenplanes -->
    <button class="btn btn-success mb-3">
      Kompletten Stundenplan anzeigen/verstecken

    </button>


    <!-- kompletter Stundenplan-->
    <div class="row">
      <div class="col-12">
        <table class="table table-hover" id="timetable">
          <thead class="thead-dark">
            <th scope="col">Stunde</th>
            <th scope="col">Montag</th>
            <th scope="col">Dienstag</th>
            <th scope="col">Mittwoch</th>
            <th scope="col">Donnerstag</th>
            <th scope="col">Freitag</th>
          </thead>
          <tbody>
            <tr>
             <th scope="row">1./2.</th>
             <td>Deutsch</td>
             <td>Englisch</td>
             <td>Mathe</td>
             <td>Sport</td>
             <td>Informatik</td>
            </tr>
            <tr>
             <th scope="row">3./4.</th>
             <td>Musik</td>
             <td>Physik</td>
             <td>Englisch</td>
             <td>Geschichte</td>
             <td>Chemie</td>
            </tr>
            <tr>
             <th scope="row">5./6.</th>
             <td>Französisch</td>
             <td>Mathe</td>
             <td>Italienisch</td>
             <td>Physik</td>
             <td>Deutsch</td>
            </tr>
            <tr>
             <th scope="row">7./8.</th>
             <td>Informatik</td>
             <td>-</td>
             <td>-</td>
             <td>Deutsch</td>
             <td>Geschichte</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $ ("#timetable").hide();
  $("button").click(function(){
    $("#timetable").toggle(1000);
  });

});
</script>
@endsection