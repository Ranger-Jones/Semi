@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-block">
            <h1>Klassen hinzufügen</h1>
        </div>
    </div>
    <form action="/a/grades/store" enctype="multipart/form-data" id="polls" method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="teacher">Lehrer</label>
            <select id="teacher" name="teacher" class="form-control">
                @foreach($teacher as $t)
                    <option>{{$t->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6 ">
            <label for="classe">Klasse</label>
            <input type="text" name="classe" class="form-control" id="classe" placeholder="Geben Sie den Namen der Klasse ein!">
        </div>
        <div class="form-group col-md-6 "> 
            <label for="choices-multiple-remove-button">Schüler</label>
            <select id="choices-multiple-remove-button" name="students[]" placeholder="Wählen Sie die Schüler der Klasse aus!" multiple>
                @foreach ($students as $s)
                    @if ($s->inclass == null || $s->inclass == 'unset')
                        <option value="{{$s->username}}">{{$s->username}}</option>
                    @endif
                @endforeach
                
            </select> 
        </div>
        <button type="submit" class="btn btn-primary col-md-6 ">Submit</button>
    </form>
</div>

<script>

$(document).ready(function(){

var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true
});


});
</script>
@endsection
