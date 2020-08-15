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
                        <a href="#" type="submit" class="search_icon"><i class="fa-search"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            // lieber Joshua, recherchieren und studieren geht über rangers und bruders css künste, haben sie vielen Dank
            
        
        </div>
    </div>   

    
    @if ($mathe != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Mathematik</strong></h3>
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
            @foreach ($mathe as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$matheS}}</p>
      </div>
    </div>
    @endif

    
    @if ($deutsch != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Deutsch</strong></h3>
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
            @foreach ($deutsch as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$deutschS}}</p>
      </div>
    </div>
    @endif

    
    @if ($info != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Informatik</strong></h3>
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
            @foreach ($info as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$infoS}}</p>
      </div>
    </div>
    @endif

    
    @if ($physik != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Physik</strong></h3>
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
            @foreach ($physik as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$physikS}}</p>
      </div>
    </div>
    @endif

    
    @if ($chemie != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Chemie</strong></h3>
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
            @foreach ($chemie as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$chemieS}}</p>
      </div>
    </div>
    @endif

    
    @if ($biologie != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Biologie</strong></h3>
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
            @foreach ($biologie as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$biologieS}}</p>
      </div>
    </div>
    @endif

    
    @if ($franz != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Französisch</strong></h3>
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
            @foreach ($franz as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$franzS}}</p>
      </div>
    </div>
    @endif

    
    @if ($englisch != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Englisch</strong></h3>
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
            @foreach ($englisch as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$englischS}}</p>
      </div>
    </div>
    @endif

    
    @if ($astronomie != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Astronomie</strong></h3>
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
            @foreach ($astronomie as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$astronomieS}}</p>
      </div>
    </div>
    @endif

    
    @if ($sport != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Sport</strong></h3>
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
            @foreach ($sport as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$sportS}}</p>
      </div>
    </div>
    @endif

    
    @if ($kunst != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Kunst</strong></h3>
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
            @foreach ($kunst as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$kunstS}}</p>
      </div>
    </div>
    @endif

    
    @if ($musik != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Musik</strong></h3>
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
            @foreach ($musik as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$musikS}}</p>
      </div>
    </div>
    @endif

    
    @if ($mnt != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Mensch, Natur & Technik</strong></h3>
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
            @foreach ($mnt as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$mntS}}</p>
      </div>
    </div>
    @endif

    
    @if ($nwut != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Naturwissenschaften & Technik</strong></h3>
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
            @foreach ($nwut as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$nwutS}}</p>
      </div>
    </div>
    @endif

    
    @if ($dg != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Darstellen & Gestalten</strong></h3>
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
            @foreach ($dg as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$dgS}}</p>
      </div>
    </div>
    @endif

    
    @if ($latein != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Latein</strong></h3>
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
            @foreach ($latein as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$lateinS}}</p>
      </div>
    </div>
    @endif

    
    @if ($geschichte != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Geschichte</strong></h3>
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
            @foreach ($mathe as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$geschichteS}}</p>
      </div>
    </div>
    @endif

    
    @if ($sozi != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Sozialkunde</strong></h3>
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
            @foreach ($sozi as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$soziS}}</p>
      </div>
    </div>
    @endif

    
    @if ($religion != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Religion</strong></h3>
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
            @foreach ($religion as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$religionS}}</p>
      </div>
    </div>
    @endif

    
    @if ($ethik != [])
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h3><strong>Ethik</strong></h3>
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
            @foreach ($ethik as $mark)
            <tr>
              <td>1.</td>
              <td>{{$mark->mark}}</td>
              <td>{{$mark->description}}</td>
              <td>{{$mark->currentDate}}</td>
              <td>{{$mark->teacher}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <p><strong>Durchschnitt:</strong>{{$ethikS}}</p>
      </div>
    </div>
    @endif
</div>
@endsection

