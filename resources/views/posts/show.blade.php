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
            <div class="d-flex align-items-center">
                <img src="/storage/{{$post->user->profile->image}}" alt="" style="max-width: 50px;" class="rounded-circle image-responsive w-50 pr-2">
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
            <img src="../{{$post->image}}" alt="alex in unterhose" class="w-50">
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

        @if(!$voted)
        <div class="row">
            <div class="col-8">
                <form action="/poll/vote/{{$post->id}}" method="post">
                @csrf
                    @foreach ($polls as $poll)
                        <label class="btn btn-sm btn-success active">
                            <input type="radio" name="voting" id="voting" value="{{$poll['id']}}">{{$poll['text']}}
                        </label>
                    @endforeach
                    <input type="submit" name="save" value="Save" class="btn btn-success">                </form>
            </div>
        </div>
        @else
            <p>Du hast leider schon abgestimmt:::::: Umfragestand einblenden</p>
        @endif
    @endif
</div>
@endsection
