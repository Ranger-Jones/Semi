@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>{{$post->caption}} <span class="badge badge-secondary">{{$post->topic}}</span></h2>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="d-flex">
                <img src="/storage/{{$post->user->image}}" alt="" style="max-width: 50px;" class="img-rounded img-responsive w-50">
                <p class="font-weigth-bold"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></p>
                <p class="font-weigth-normal">|{{$post->addressees}}</p>
                <p class="font-weigth-normal">|{{$post->created_at}}</p>

            </div>
            
        </div>
        <div class="d-flex justify-content-rigth">
                    <button class="btn btn-danger" style="heigth:20px;"></button>
                </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-12">
            <p class="font-weigth-normal">{{$post->description}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="d-block">
                <h4>Bilder</h4>
            </div>
            <img src="/storage/{{$post->image}}" alt="alex in unterhose">
        </div>
    </div>

    <hr>
    @if (!$polls == [])
        <div class="row">
            <div class="col-8">
                <div class="d-block">
                    <h2>Umfrage von {{$post->user->username}}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <form action="post">
                <div class="btn-group" data-toggle="buttons">
                        @foreach ($polls as $poll)
                            <label class="btn btn-sm btn-success active">
                                <input type="radio" name="{{$post['id']}}" id="{{$post['id']}}" value="{{$poll['id']}}">{{$poll['id']}}
                            </label>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
@endsection
