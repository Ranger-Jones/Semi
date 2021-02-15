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
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <div class="d-block">
                    <form class="form-inline" action="/m/find" method="post">
                    @csrf
                        <div class="searchbar">
                        <input class="search_input" type="text" name="subject" placeholder="Search...">
                        <a href="#" type="submit" class="search_icon"><i class="fa fa-search"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            
            
        
        </div>
    </div>  

    
    @if ($result != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3>Suchergebnisse deiner Suche: <strong>{{$search}}</strong></h3>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Halbjahr</th>
              <th scope="col">Note</th>
              <th scope="col">Beschreibung</th>
              <th scope="col">Datum</th>
              <th scope="col">Lehrer</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($result as $r)
            <tr>
              <td>1.</td>
              <td>{{$r->mark}}</td>
              <td>{{$r->description}}</td>
              <td>{{$r->currentDate}}</td>
              <td>{{$r->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>

    @else
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3>Suchergebnisse deiner Suche: <strong>{{$search}}</strong></h3>
            </div>
        </div>
    </div>
    //mach ma was cooles pablo
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <img src="https://cms.sachsen.schule/fileadmin/_special/benutzer/821/Maus.gif" alt="" class="img">
            </div>
            <strong>Leider nix gefunden :/</strong>
        </div>
    </div>

    @endif
    

    


    
 
</div>
@endsection

