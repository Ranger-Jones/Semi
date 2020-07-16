@extends('layouts.app')

@section('content')
<div class="container-fluid background-test">
    <div class="test" >
        <div class="row pt-2">  
            <div class="col-3 d-flex justify-content-center align-items-center" style="margin-left: 38%;">
                <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle image-responsive w-100">
            </div>
        </div>
        <div class="row d-block align-items-baseline">
            <div class="d-flex justify-content-center">
                <h1 class="pt-3">{{ $user->username }}</h1>
            </div>
            @can ('update', $user->profile)
                <div class="d-flex justify-content-center">
                    <a href="/profile/{{ $user->id }}/edit"><p class="text-dark">Edit Profile</p></a>

                </div>
            @endcan
            <div class="d-flex justify-content-center">
                <div class="pr-4"><strong>{{ $postsCount }}</strong> posts</div>
                <div class="pr-4"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-4"><strong>{{ $followingsCount }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold d-flex justify-content-center">
                {{ $user->profile->title }}
            </div>
            <div class="d-flex justify-content-center" style="width: 50vw; margin: auto;">
                {{ $user->profile->description }}
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ $user->profile->url }}" class="white-link" >{{ $user->profile->url }}</a>
            </div>
            @can ('update', $user->profile)
                <div class="d-flex justify-content-center pt-4">
                    <a href="/p/create" class="btn btn-sp btn-sp-white btn-animate">Add a post</a>
                </div>
            @endcan
            @cannot ('update', $user->profile)
            <follow-button user-id="{{ $user->id }}" follows="{{ $follows}}"></follow-button>
            @endcannot
        </div>
    </div>
</div>
<div class="container">
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="alex in unterhose" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
