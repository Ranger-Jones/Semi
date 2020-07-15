@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2>Marks</h2>
            </div>
        </div>
    </div>    
</div>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  border: 1px solid black;
} 

th,td {
  border: 1px solid black;
}

table.a {
  table-layout: auto;
  width: 300px;  
}

</style>
</head>
<body>
    
<h3>Deutsch</h3>
<table class="a">
  <tr>
    <th>Datum</th>
    <th>Halbjahr</th>
    <th>Note</th>
    <th>Beschreibung</th>
  </tr>
  <tr>
    <td>27.01.2020</td>
    <td>2.</td>
    <td>15 NP</td>
    <td>Klausur</td>
  </tr>

<h3>Mathe</h3>
<table class="a">
  <tr>
    <th>Datum</th>
    <th>Halbjahr</th>
    <th>Note</th>
    <th>Beschreibung</th>
  </tr>
  <tr>
    <td>27.01.2020</td>
    <td>2.</td>
    <td>15 NP</td>
    <td>Klausur</td>
  </tr>
</table>

</body>
</html>
@endsection

