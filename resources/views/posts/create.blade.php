@extends('layouts.app')

@section('content')
<div class="container offset-3">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <h1>Beitrag hinzufügen</h1>
        </div>
        <div class="form-group row">
            <div class="col-8">
                <label for="caption" class="col-md-4 col-form-label ">Überschrift des Beitrags</label>
                    <input id="caption" 
                        type="text" 
                        name="caption"
                        class="form-control @error('caption') is-invalid @enderror" 
                        value="{{ old('caption') }}" 
                        required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

        </div>
        <div class="form-group row">
            <div class="col-8">
                <label for="caption" class="col-md-4 col-form-label ">Inhalt des Beitrags</label>
                    <textarea id="description" 
                        type="text" 
                        name="description"
                        class="form-control @error('description') is-invalid @enderror" 
                        value="{{ old('description') }}" 
                        autocomplete="description">
                    </textarea>
                    @error('description')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-8">
                    <label for="topic" class="col-md-8 col-form-label">Thema des Beitrags</label>
                    <select class="form-control @error('topic') is-invalid @enderror" 
                            id="topic" 
                            type="text" 
                            name="topic">
                        <option>Schulleben</option>
                        <option>Organisatorisches</option>
                        <option>Umfragen</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-8">
                    <label for="addresses" class="col-md-8 col-form-label">Wer soll diesen Beitrag sehen?</label>
                    <select class="form-control @error('addresses') is-invalid @enderror" 
                            id="addresses" 
                            type="text" 
                            name="addresses">
                        <option>Meine Klasse</option>
                        <option>Meine Klassenstufe</option>
                        <option>Meine Homies</option>
                        <option>Alle</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row pl-2">
            <div class="col-8">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Umfrage erstellen
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Erstelle deine Umfrage</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input_fields_container_part">
                                    <div class="input-group">
                                    <input id="pollitem" 
                                        type="text" 
                                        name="pollitem[0]"
                                        class="form-control">
                                    <div class="pl-3">

                                    <button class="btn btn-sm btn-primary add_more_button">Add More Fields</button>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                <input type="file" class="form-control-file" id="image" name="image">

                @error('image')
                    <strong style="color: #e74c3c;">{{ $message }}</strong>
                @enderror
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-8">
                <button class="btn btn-primary">Add new Post</button>
            </div>
        </div>
    </form>
</div>
<script>
$(document).ready(function() {
var max_fields_limit = 8; //set limit for maximum input fields
var x = 1; //initialize counter for text box
$('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
e.preventDefault();
if(x < max_fields_limit){ //check conditions
x++; //counter increment
$('.input_fields_container_part').append('<div class="d-flex pt-3"><input id="pollitem" type="text" name="pollitem" class="form-control" ><a href="#" class="remove_field pl-5" style="margin-left:10px;">Remove</a></div>'); //add input field
}
}); 
$('.input_fields_container_part').on("click",".remove_field", function(e){ //user click on remove text links
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});
</script>
@endsection
