@extends('layouts.app')

@section('content')

<div class="container offset-3">
    <form action="/me/{{Auth::user()->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8">
                <div class="d-block">
                    <h1>Deine Schulinformation</h1>
                    <p class="font-weight-lighter font-italic">Vervollständige dein Profil um alle Funktionen zu verwenden</p>  
                </div>
                <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="inclass" class="col-md-8 col-form-label">Schulklasse</label>
                                    <select class="form-control @error('inclass') is-invalid @enderror" 
                                            id="inclass" 
                                            type="text" 
                                            name="inclass">
                                        <option hidden>{{$user->inclass}}</option>
                                        <option>5a</option>
                                        <option>5b</option>
                                        <option>6a</option>
                                        <option>6b</option>
                                        <option>7a</option>
                                        <option>7b</option>
                                        <option>8a</option>
                                        <option>8b</option>
                                        <option>9a</option>
                                        <option>9b</option>
                                        <option>9c</option>
                                        <option>10a</option>
                                        <option>10b</option>
                                        <option>10c</option>
                                        <option>11a</option>
                                        <option>11b</option>
                                        <option>11c</option>
                                    </select>
                                </div>
                            </div>
                </div>
                <div class="form-group row pl-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Unterrichtsfächer
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Unterrichtsfächer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input 
                                                type="checkbox" 
                                                value="mathematik" 
                                                id="mathematikCheck" 
                                                name="mathematikCheckN" 
                                                aria-label="Checkbox for following text input" 
                                                @if ($allSubjects['mathematik'] == 'checked')
                                                    checked
                                                @endif
                                            >  
                                        </div>
                                    </div>
                                    <p class="pl-3 pt-3">Mathematik</p>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <input 
                                                type="checkbox" 
                                                value="deutsch" 
                                                id="deutschCheck" 
                                                name="deutschCheckN" 
                                                aria-label="Checkbox for following text input" 
                                                @if ($allSubjects['deutsch'] == 'checked')
                                                    checked
                                                @endif
                                            >                                          </div>
                                    </div>
                                    <p class="pl-3 pt-3">Deutsch</p>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input 
                                                    type="checkbox" 
                                                    value="biologie" 
                                                    id="biologieCheck" 
                                                    name="biologieCheckN" 
                                                    aria-label="Checkbox for following text input" 
                                                    @if ($allSubjects['biologie'] == 'checked')
                                                        checked
                                                    @endif
                                                >                                          
                                        </div>
                                    </div>
                                    <p class="pl-3 pt-3">Biologie</p>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input 
                                                    type="checkbox" 
                                                    value="chemie" 
                                                    id="chemieCheck" 
                                                    name="chemieCheckN" 
                                                    aria-label="Checkbox for following text input" 
                                                    @if ($allSubjects['chemie'] == 'checked')
                                                        checked
                                                    @endif
                                                >                                          
                                        </div>
                                    </div>
                                    <p class="pl-3 pt-3">Chemie</p>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input 
                                                    type="checkbox" 
                                                    value="physik" 
                                                    id="physikCheck" 
                                                    name="physikCheckN" 
                                                    aria-label="Checkbox for following text input" 
                                                    @if ($allSubjects['physik'] == 'checked')
                                                        checked
                                                    @endif
                                                >                                          
                                        </div>
                                    </div>
                                    <p class="pl-3 pt-3">Physik</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="row pl-2">
                    <button class="btn btn-success" type="submit">Speichern</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection