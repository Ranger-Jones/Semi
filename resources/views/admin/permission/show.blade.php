@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2>Berechtigungen von {{$user->username}}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach ($permissions as $permission)
                <form action="/a/permissions/update/{{$user->id}}/{{$permission->id}}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <h4>{{$permission->permission}}</h4>
                        <button class="btn remove pl-3">Entferne Permission</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
