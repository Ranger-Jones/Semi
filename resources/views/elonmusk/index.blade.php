@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Elon Musk, unser Gott</h1>
</div>
@endsection
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border: 1px solid black;
} 

th,td {
  border: 1px solid black;
}

table.a {
  table-layout: auto;
  width: max-content;  
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
    <th>Gewichtung</th>
  </tr>
  <tr>
    <td>27.01.2020</td>
    <td>2.</td>
    <td>15 NP</td>
    <td>Klausur</td>
    <td>1/3; Klausur</td>
  </tr>

<h3>Mathe</h3>
<table class="a">
  <tr>
    <th>Datum</th>
    <th>Halbjahr</th>
    <th>Note</th>
    <th>Beschreibung</th>
    <th>Gewichtung</th>
  </tr>
  <tr>
    <td>27.01.2020</td>
    <td>2.</td>
    <td>15 NP</td>
    <td>Klausur</td>
    <td>1/3; Klausur</td>
  </tr>
</table>

</body>
</html>