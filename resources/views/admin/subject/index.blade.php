@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-block">
            <h1>Schulfächer verwalten</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $s)
                    <tr>
                        <th scope="row">{{$s->id}}</th>
                        <td>{{$s->name}}</td>
                        <td>{{$s->teachers}}</td>
                        <td>{{$s->classes}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="/a/subjects/create" class="btn btn-info" role="button">Neues Fach hinzufügen</a>
        </div>
    </div>
</div>
@endsection
