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
    <div class="row wrap-table100 mb-5"> 
      <div class="col-12">
        <div class="table100 ver1 mb-5">
        <div class="table100-head">
          <table>
            <thead>
              <tr class="row100 head">
                <th class="cell100 column1">Stunde</th>
                <th class="cell100 column2">Fach</th>
                <th class="cell100 column3">Raum</th>
                <th class="cell100 column4">Lehrer</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="table100-body js-pscroll">
          <table>
            <tbody>
              <tr class="row100 body">
                @foreach($result as $key => $value)
                <td class="cell100 column3">{{$value}}</td>
                @if($key == 3 || $key == 7 || $key == 12)
              </tr>
              <tr class="row100 body">
                @endif
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>

    <hr class="pb-3">

    <!-- Button zum Einklappen des Stundenplanes -->
    <button class="btn btn-success mb-3">
      Kompletten Stundenplan anzeigen/verstecken

    </button>


    <!-- kompletter Stundenplan-->
    <div class="row wrap-table100 mb-5">
      <div class="col-12">
        <div class="table100 ver1 mb-5" id="timetable">
          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">Stunde</th>
                  <th class="cell100 column2">Montag</th>
                  <th class="cell100 column3">Dienstag</th>
                  <th class="cell100 column4">Mittwoch</th>
                  <th class="cell100 column5">Donnerstag</th>
                  <th class="cell100 column6">Freitag</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table100-body js-pscroll">
            <table>
              <tbody>
                <tr class="row100 body">
                  <td class="cell100 column1" scope="row">1./2.</td>
                  <td class="cell100 column2">Deutsch</td>
                  <td class="cell100 column3">Englisch</td>
                  <td class="cell100 column4">Mathe</td>
                  <td class="cell100 column5">Sport</td>
                  <td class="cell100 column6">Informatik</td>
                </tr>
                <tr class="row100 body">
                 <td class="cell100 column1" scope="row">3./4.</td>
                 <td class="cell100 column2">Musik</td>
                 <td class="cell100 column3">Physik</td>
                 <td class="cell100 column4">Englisch</td>
                 <td class="cell100 column5">Geschichte</td>
                 <td class="cell100 column6">Chemie</td>
                </tr>
                <tr class="row100 body">
                 <td class="cell100 column1" scope="row">5./6.</td>
                 <td class="cell100 column2">Französisch</td>
                 <td class="cell100 column3">Mathe</td>
                 <td class="cell100 column4">Italienisch</td>
                 <td class="cell100 column5">Physik</td>
                 <td class="cell100 column6">Deutsch</td>
                </tr>
                <tr class="row100 body">
                 <td class="cell100 column1" scope="row">7./8.</td>
                 <td class="cell100 column2">Informatik</td>
                 <td class="cell100 column3">-</td>
                 <td class="cell100 column4">-</td>
                 <td class="cell100 column5">Deutsch</td>
                 <td class="cell100 column6">Geschichte</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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