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
                        <th scope="col">Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $g)
                        <tr class='clickable-row hovertable' data-href='/a/grades/{{$g->id}}'>
                            <th scope="row">{{$g->id}}</th>
                            <td>{{$g->name}}</td>
                            <td>{{$g->teacher}}</td>
                            <td>
                                <a href="/a/grades/{{$g->id}}/delete" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                                <a href="/a/grades/{{$g->id}}/edit" class="btn btn-success" role="button"><i class="fa fa-edit"></i></a>
                            </td>
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

    <div class="row">
        <div class="col-12 d-block">
            <h3>Schüler ohne Klasse</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Rolle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unset_user as $uu)
                        <tr class='hovertable'>
                            <th scope="row">{{$uu['id']}}</th>
                            <td>{{$uu['name']}}</td>
                            <td>{{$uu['username']}}</td>
                            <td>{{$uu['role']}}</td>
</tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
@endsection
