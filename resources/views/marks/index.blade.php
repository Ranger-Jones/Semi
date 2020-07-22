@extends('layouts.app')

@section('content')
<link href="{{ asset('css/marks.css') }}" rel="stylesheet">
<script src="{{ asset('js/marks.js') }}" defer></script>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2>Noten</h2>
            </div>
            // hier sollte die Suchfunktion sein, aber ich habe es bestimmt falsch implementiert, da es nicht funktioniert: schreib mich nochmal an, wenn du den Link der Seite haben willst
            <form class="search-box">
              <input type="text" class="input" name="">
              <button type="button" class="btn" name="button"></button>
           </form>
        </div>
    </div>    

    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Mathe</strong></h3>
            </div>
        </div>
    </div> 
    <p><strong>Durchschnitt:</strong> 15NP</p>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Halbjahr</th>
      <th scope="col">Note</th>
      <th scope="col">Beschreibung</th>
      <th scope="col">Datum</th>
      <th scope="col">Gewichtung</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1.</td>
      <td>15</td>
      <td>Klausur</td>
      <td>22.09.20</td>
      <td>1/3; Klausur</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1.</td>
      <td>15</td>
      <td>Test</td>
      <td>22.09.20</td>
      <td>Einfach; Test</td>
    </tr>
    
  </tbody>
</table>
  <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Deutsch</strong></h3> 
            </div>
        </div>
    </div>
    <p><strong>Durchschnitt:</strong> 15NP</p>
    <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Halbjahr</th>
      <th scope="col">Note</th>
      <th scope="col">Beschreibung</th>
      <th scope="col">Datum</th>
      <th scope="col">Gewichtung</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1.</td>
      <td>15</td>
      <td>Klausur</td>
      <td>22.09.20</td>
      <td>1/3; Klausur</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1.</td>
      <td>15</td>
      <td>Test</td>
      <td>22.09.20</td>
      <td>Einfach; Test</td>
    </tr>
  </tbody>
</table>
</div>
@endsection

