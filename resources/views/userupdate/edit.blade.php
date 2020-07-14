@extends('layouts.app')

@section('content')

<div class="container offset-3">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
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
                <div class="form-group row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

@endsection