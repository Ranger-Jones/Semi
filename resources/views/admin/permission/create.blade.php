@extends('layouts.admin')

@section('content')
<div class="container offset-3">
    <form action="/a/permissions/store" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <h1>Berechtigung hinzufügen</h1>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-8">
                    <label for="username" class="col-md-8 col-form-label">Wählen Sie einen User aus</label>
                    <select class="form-control @error('username') is-invalid @enderror" 
                            id="username" 
                            type="text" 
                            name="username">
                        @foreach ($usernames as $username)
                            <option>{{$username->username}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-8">
                    <label for="permission" class="col-md-8 col-form-label">Welche Berechtigung soll hinzugefügt werden?</label>
                    <select class="form-control @error('permission') is-invalid @enderror" 
                            id="permission" 
                            type="text" 
                            name="permission">
                        <option>Schüler</option>
                        <option>Lehrer</option>
                        <option>Admin</option>
                        <option>Moderator</option>
                    </select>
                </div>
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
