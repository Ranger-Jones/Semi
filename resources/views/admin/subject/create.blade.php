@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-block">
            <h1>Schulfächer hinzufügen</h1>
        </div>
    </div>
    
    <form action="/a/subjects/store" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Name des Schulfachs</label>
            <select id="subject" name="subject" class="form-control">
                @foreach($subjects as $s)
                    <option>{{$s}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="teacher">Fachlehrer</label>
            <select id="teacher" name="teacher" class="form-control">
                @foreach($teacher as $t)
                    <option>{{$t}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6 "> 
            <label for="teacher">Klassen</label>
            <select id="choices-multiple-remove-button" name='grades[]' placeholder="Klassen auswählen" multiple>
            @foreach($grades as $g)
                    <option>{{$g->name}}</option>
                @endforeach
            </select> 
        </div>
        <button type="submit" class="btn btn-primary col-md-6">Sfgubmit</button>

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
