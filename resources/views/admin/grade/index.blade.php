@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-block">
            <h1>Klassen verwalten</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Klasse</th>
                        <th scope="col">Lehrer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $g)
                    <tr>
                        <th scope="row">{{$g->id}}</th>
                        <td>{{$g->name}}</td>
                        <td>{{$g->teacher}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="/a/grades/create" class="btn btn-info" role="button">Neue Klasse hinzufügen</a>
        </div>
    </div>
</div>
@endsection
