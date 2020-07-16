@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2>Noten</h2>
            </div>
        </div>
    </div>    

    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3>Mathe</h3>
            </div>
        </div>
    </div> 
<table class="table">
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
    
  </tbody>
</table>
  <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3>Deutsch</h3>
            </div>
        </div>
    </div>
    <table class="table">
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
    
  </tbody>
</table>
</div>
@endsection

