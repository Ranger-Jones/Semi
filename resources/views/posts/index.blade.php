@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h1 class="display-4">Beiträge der Schulgemeinschaft</h1>
            </div>
            <p class="font-weight-light">Hier können Sie Beiträge sehen, welche von Schülern oder Lehrpersonal, sowie anderen Personen bereitgestellt werden. Zudem besteht die Möglichkeit zur Filterung der Beiträge.</p>

        </div>
    </div>

    <hr>
    @foreach($posts as $post)
    <div class="row">
        <div class="background-change">

            <div class="col-6 offset-3 pt-3">
                <a href="/p/{{$post->id}}">
                    <img src="{{$post->image}}" alt="alex in unterhose" class="image-responsive w-100">
                    <h2 class="pt-3">{{ $post->caption}}</h2>
                    <div class="d-flex">
                        <p class="font-weight-light">
                            User: <div class="font-italic pr-1">{{$post->user->username}}</div>
                            |Topic: <div class="font-italic">{{$post->topic}}</div> 
                            |Umfrage: <div class="font-italic">{{$post->poll}}</div> 
                        </p>
                    </div>
                    <hr>
                </a>
            </div>
        </div>
    </div>
    @endforeach


    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                 {{ $posts->links() }}
            </div>
        </div>
    </div>



</div>
@endsection
