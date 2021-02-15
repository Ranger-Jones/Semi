@extends('layouts.app')

@section('content')
<div class="container">
    <article class="row card  border-0 flex-md-row justify-content-between align-items-center card-top">
        @if($homework->images != 'unset')
            <a class="col-md-5  order-md-2 order-1 w-md-25" href="#">
                <img class="img-fluid" src="/storage/{{$homework->images}}" srcset="https://via.placeholder.com/1110x1000/5fa9f8/ffffff 2x" alt="Pic 8">
            </a>
        @endif
        <div class="card-body order-2 order-md-1 @if($homework->images == 'unset')col-md-12 @else col-md-7 @endif">
            <div class=" text-uppercase font-weight-bold mb-4 text-success">{{$homework->subject}}</div>
            <h2 class="card-title display-4 font-weight-bold">
                <a href="#" class="text-dark" title="Blog title">{{$homework->caption}}</a>
              </h2>
            <div class="card-text mb-4">
                <p class="lead">{{$homework->task}}</p>
            </div>
            <div class="mt-auto d-flex align-items-center pt-2">
                <div class="mr-3">
                    @php
                        $teacher = App\User::where('name', $homework->teacher)->first();
                        $img = $teacher->profile->profileimage();
                    @endphp
                    <img class="d-block img-fluid rounded-circle" style="max-height: 50px;" src="{{$img}}" srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                </div>
                <div class="d-block">
                    <div class="font-weight-bold">{{$homework->teacher}}</div>
                    <div class="text-grey">{{$homework->created_at->format('jS F Y h:i:s A')}}</div>
                </div>
            </div>
        </div>
    </article>
    <article class="row card  border-0 flex-md-row justify-content-between align-items-center card-top mt-5">
        <div class="card-body order-2 order-md-1 col-md-12">
            <h2 class="card-title display-4 font-weight-bold">
                <a href="#" class="text-dark" title="Blog title">Verfügbare Dokumente zum Download</a>
            </h2>
            <div class="card-text mb-4">
                <p class="lead">Dokument1</p>
            </div>
        </div>
    </article>
</div>
@endsection
