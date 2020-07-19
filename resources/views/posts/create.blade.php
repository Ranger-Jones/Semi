@extends('layouts.app')

@section('content')
<div class="container offset-3">
    <form action="/p" enctype="multipart/form-data" id="polls" method="post">
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
        <div class="form-group">
            <div class="row">
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input 
                                        type="checkbox" 
                                        value="availabe" 
                                        id="poll" 
                                        name="poll" 
                                        aria-label="Checkbox for following text input" 
                                    >                            
                                <p class="pl-3 pt-3">Umfrage hinzufügen</p>              
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
                <input type="submit" name="save" value="Save" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
@endsection
