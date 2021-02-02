@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-block">
            <h1>Klasse {{$grade_id->name}} bearbeiten</h1>
        </div>
    </div>
    <form action="/a/grades/{{$grade_id->id}}/update" enctype="multipart/form-data" id="polls" method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="teacher">Lehrer der Klasse: {{$teacher}}</label><br>
            <a href="#" id="btnFadeTeacherIn" class="text-danger">Lehrer ändern</a>
            <select id="teacher" name="teacher" class="form-control">
               @foreach($teachers as $t)
                    @if($t->name == $teacher)
                        <option selected>{{$t->name}}</option>
                    @else
                        <option>{{$t->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6 ">
            <label for="classe">Name der Klasse: {{$grade_id->name}}</label><br>
            <a href="#" id="btnFadeNameIn" class="text-danger">Name ändern</a>
            <input type="text" name="classe" class="form-control" id="classe" placeholder="Geben Sie den Namen der Klasse ein!" value="{{$grade_id->name}}">
        </div>
        <div class="form-group col-md-6 "> 
            <label for="choices-multiple-remove-button">Schüler</label>
            <select id="choices-multiple-remove-button" name="students[]" placeholder="Wählen Sie die Schüler der Klasse aus!" multiple>
                @foreach ($students as $s)
                    <option selected value="{{$s->name}}">{{$s->name}}</option>
                @endforeach
                @foreach ($users as $u)
                    <option value="{{$u->name}}">{{$u->name}}</option>
                @endforeach
                
            </select> 
        </div>
        <button type="submit" class="btn btn-primary col-md-6 ">Submit</button>
    </form>
</div>

<script>


$(document).ready(function(){

$('#teacher').fadeOut();
$('#classe').fadeOut();

$('#btnFadeTeacherIn').click(function () {
    $('#teacher').stop(true).fadeToggle();
})

$('#btnFadeNameIn').click(function () {
    $('#classe').stop(true).fadeToggle();
})



var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true
});


});
</script>
@endsection
