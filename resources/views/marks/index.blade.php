@extends('layouts.app')

@section('content')
<link href="{{ asset('css/marks.css') }}" rel="stylesheet">
<script src="{{ asset('js/marks.js') }}" defer></script>


<div class="container">

    @if($role == "Lehrer")
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <div>
                    <h2>Noten</h2>
                </div>
            </div>
        </div>
    </div>
    <hr class="pb-3">
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
            <form action="/m/create" method="get">
                @csrf
                <div class="form-group">
                  <label for="subject_class">Example select</label>
                  <select class="form-control" id="subject_class" name="subject_class">
                    @foreach ($subject_class as $sc)
                      <option>{{$sc->name}} - {{$sc->classe}}</option>
                    @endforeach
                  </select>
                </div>
                <input type="submit" class="btn btn-success mt-3" value="Generate" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
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

    @if($role == "Schüler")
    <div class="container-table100">
        <div class="d-block">
            <div class="row">
                <div class="col-12">
                    <div class="d-block justify-content-center">
                        <div class="mr-3">
                            <h1>Noten</h1>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="d-block justify-content-center">
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
          @foreach($subjects as $s)
          
            <div class="wrap-table100  mb-5">
            <hr class="pb-3">
                <div class="d-flex justify-content-center">
                  <h2>{{$s->name}}</h2>
                </div>
                <div class="table100 ver1 mb-5">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column11">Datum</th>
                                    <th class="cell100 column21">Fach</th>
                                    <th class="cell100 column31">Note</th>
                                    <th class="cell100 column41">Bemerkung</th>
                                    <th class="cell100 column51">Fachlehrer</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                            @php
                              $marksthere = false;
                            @endphp
                            @foreach($marks as $m)
                                @if($s->name == $m->subject)
                                  <tr class="row100 body">
                                      <td class="cell100 column11" scope="row">{{$m->created_at->format('jS F Y h:i:s A')}}</td>
                                      <td class="cell100 column21">{{$m->subject}}</td>
                                      <td class="cell100 column31">{{$m->mark}}</td>
                                      <td class="cell100 column41">{{$m->description}}</td>
                                      <td class="cell100 column51">{{$m->teacher}}</td>
                                  </tr>
                              
                                @php
                                  $marksthere = true;
                                @endphp
                                @endif
                            @endforeach
                            @if(!$marksthere)
                                  <tr class="row100 body">
                                      <td class="cell100 column11" scope="row">Leider</td>
                                      <td class="cell100 column21">sind</td>
                                      <td class="cell100 column31">keine</td>
                                      <td class="cell100 column41">Noten</td>
                                      <td class="cell100 column51">verfügbar :(</td>
                                  </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          @endforeach
    </div>
    @endif
    
    
</div>
@endsection

