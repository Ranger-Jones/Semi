@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        {{ $user->id }}
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Title</label>
                        <input id="title" 
                            type="text" 
                            name="title"
                            class="form-control @error('title') is-invalid @enderror" 
                            value="{{ old('title') ?? $user->profile->title }}" 
                            required autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>
                        <input id="description" 
                            type="text" 
                            name="description"
                            class="form-control @error('description') is-invalid @enderror" 
                            value="{{ old('description') ?? $user->profile->description }}" 
                            autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>
            </div>
        </div>
        <div class="row">
            <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
                <strong style="color: #e74c3c;">{{ $message }}</strong>
            @enderror
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Save Profile</button>
        </div>
    </form>
</div>
@endsection
