@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h1>Klasse {{$grade_id->name}}</h1>
            </div>
        </div>
    </div>
    <br><hr>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2>Klassenübersicht</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <p><strong>Lehrer:&nbsp;</strong></p>
                <p>{{$grade_id->teacher}}</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h3>Schüler</h3>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fächer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                        <tr class='clickable-row hovertable'  data-href='/profile/{{$u->id}}'>
                            <th scope="row">{{$u->id}}</th>
                            <td>{{$u->name}}</td>
                            <td>{{$u->username}}</td>
                            <td >{{$u->email}}</td>
                            <td>{{$u->subject}}</td>
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
