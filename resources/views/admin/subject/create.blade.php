@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-block">
            <h1>Schulfächer hinzufügen</h1>
        </div>
    </div>
    
    <form>
        @csrf
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Name des Schulfachs</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Geben Sie das Fach ein">
        </div>
        <div class="form-group col-md-6">
            <label for="teacher">Lehrer</label>
            <select id="teacher" class="form-control">
                @foreach($teacher as $t)
                    <option>{{$t}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6 "> 
            <label for="teacher">Klassen</label>
            <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>
                <option value="HTML">HTML</option>
                <option value="Jquery">Jquery</option>
                <option value="CSS">CSS</option>
                <option value="Bootstrap 3">Bootstrap 3</option>
                <option value="Bootstrap 4">Bootstrap 4</option>
                <option value="Java">Java</option>
                <option value="Javascript">Javascript</option>
                <option value="Angular">Angular</option>
                <option value="Python">Python</option>
                <option value="Hybris">Hybris</option>
                <option value="SQL">SQL</option>
                <option value="NOSQL">NOSQL</option>
                <option value="NodeJS">NodeJS</option>
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
