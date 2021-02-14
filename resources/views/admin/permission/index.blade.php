@extends('layouts.admin')

@section('content')
<div class="container">
    <button class="btn btn-large btn-success">
        <a href="/a/permissions/create" class="permission-btn-text">Erstelle eine neue Berechtigung</a>
    </button>
    <p>Erhalte Benutzerberechtigungen</p>
    <form action="/a/permissions/show" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <h1>Erhalte Berechtigungsinfos über einen User</h1>
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
        <div class="row pt-4">
            <div class="col-8">
                <input type="submit" name="save" value="Save" class="btn btn-success">
            </div>
        </div>
    </form>

    <form action="/a/teacher" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <h1>Be a Teacher</h1>
        </div>
        
        <div class="row pt-4">
            <div class="col-8">
                <input type="submit" name="save" value="Save" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
@endsection
