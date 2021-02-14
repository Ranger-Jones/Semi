@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <h2>Hausaufgabe erstellen</h2>
                </div>
            </div>
        </div>
        <hr>
        <form action="/h/store" enctype="multipart/form-data" method="post">
             @csrf
            <div class="offset-3">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="caption" class="col-md-8 -col-form-label ">Überschrift der Hausaufgabe</label>
                                    <input id="caption" 
                                        type="text" 
                                        name="caption"
                                        class="form-control @error('caption') is-invalid @enderror" 
                                        placeholder="Beispiel: Schriftliche Hausaufgabe" 
                                        required autocomplete="caption" autofocus>

                                    @error('caption')
                                        <span class="invalid-feedback d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="task" class="col-md-8 col-form-label ">Hausaufgabe Aufgabenstellung</label>
                                    <textarea id="task" 
                                        type="text" 
                                        name="task"
                                        class="form-control @error('task') is-invalid @enderror" 
                                        placeholder="Buch Seite 23/4 erledigen" 
                                        required autocomplete="task"></textarea>

                                    @error('task')
                                        <span class="invalid-feedback d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="subject" class="col-md-8 col-form-label">Wählen Sie ein Fach aus</label>
                                    <select class="form-control @error('subject') is-invalid @enderror" 
                                            id="subject" 
                                            type="text" 
                                            name="subject" 
                                            value="Wählen Sie die Klasse aus">
                                        @foreach($subjects as $s)
                                            <option>{{$s->name}} - {{$s->classe}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <!-- Date input -->
                            <div class="row">
                                <div class="col-8">
                                    <label for="date" class="col-md-8 col-form-label">Kontrolldatum</label>
                                    <input class="form-control" 
                                            id="date" 
                                            name="date" 
                                            placeholder="MM/DD/YYY" 
                                            type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="image" class="col-md-8 col-form-label ">Fügen Sie ein Bild hinzu</label>
                                    <input type="file" class="form-control-file" id="image" name="image">

                                    @error('image')
                                        <strong style="color: #e74c3c;">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 d-flex justify-content-center">
                                <button class="btn btn-success btn-submit">Hausaufgabe veröffentlichen</button>
                            </div>
                        </div>
            </div>
        </form>
</div>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
@endsection
