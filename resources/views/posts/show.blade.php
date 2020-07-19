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
        <div class="col-8">
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
                    Umfrage von {{$post->user->username}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <form action="post">
                    <div class="d-block">
                        @foreach ($polls as $poll)
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" value="{{$poll->id}}" name="{{$poll->id}}" id="{{$poll->id}}" aria-label="Radio button for following text input">
                                        </div>
                                        <p class="font-weigth-normal">{{$poll->text}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
@endsection
