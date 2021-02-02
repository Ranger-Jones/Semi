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
                        <th scope="col">Name des Fachs</th>
                        <th scope="col">Fachlehrer</th>
                        <th scope="col">Klasse</th>
                        <th scope="col">Anzahl der Schüler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $s)
                    <tr>
                        <th scope="row">{{$s->id}}</th>
                        <td>{{$s->name}}</td>
                        <td>{{$s->teacher}}</td>
                        <td>{{$s->classe}}</td>
                        <td>
                            <a href="/a/subjects/{{$s->id}}/destroy" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                            <a href="/a/subjects/{{$s->id}}/edit" class="btn btn-success" role="button"><i class="fa fa-edit"></i></a>
                        </td>
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
