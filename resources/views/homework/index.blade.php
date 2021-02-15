@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="osahan-account-page-left shadow-sm bg-white h-100">
                <div class="border-bottom p-4">
                    <div class="osahan-user text-center">
                        @if(!$isTeacher)
                        <div class="osahan-user-media">
                            <img class="mb-3 rounded-pill shadow-sm mt-1" src="{{auth()->user()->profile->profileimage()}}" alt="gurdeep singh osahan">
                            <div class="osahan-user-media-body">
                                <h6 class="mb-2"><strong>{{auth()->user()->name}}</strong></h6>
                                <p class="mb-1"><i>Schüler</i></p>
                                <p class="mb-1">{{auth()->user()->inclass}}</p>
                                <p>{{auth()->user()->email}}</p>
                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3"href="/me/update"><i class="icofont-ui-edit"></i> EDIT</a></p>
                            </div>
                        </div>
                        @else
                        <div class="osahan-user-media">
                            <img class="mb-3 rounded-pill shadow-sm mt-1" src="{{auth()->user()->profile->profileimage()}}" alt="gurdeep singh osahan">
                            <div class="osahan-user-media-body">
                                <h6 class="mb-2"><strong>{{auth()->user()->name}}</strong></h6>
                                <p class="mb-1"><i>Lehrer</i></p>
                                @foreach($grades as $g)
                                <p class="mb-1">Klassenlehrer/in der {{$g->name}}</p>
                                @endforeach
                                <p>{{auth()->user()->email}}</p>
                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3"href="/me/update"><i class="icofont-ui-edit"></i> EDIT</a></p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @if(!$isTeacher)
                <ul class="nav nav-tabs justify-content-left border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false"><i class="icofont-sale-discount"></i>Alle Hausaufgaben</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="unchecked-tab" data-toggle="tab" href="#unchecked" role="tab" aria-controls="unchecked" aria-selected="false"><i class="icofont-sale-discount"></i>Unfertige Aufgaben</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chronic-tab" data-toggle="tab" href="#chronic" role="tab" aria-controls="chronic" aria-selected="false"><i class="icofont-sale-discount"></i>Hausaufgabenchronik</a>
                    </li>
                    @foreach($subjects as $s)
                    <li class="nav-item">
                        <a class="nav-link" id="{{$s->name}}-tab" data-toggle="tab" href="#{{$s->name}}" role="tab" aria-controls="{{$s->name}}" aria-selected="false"><i class="icofont-sale-discount"></i> {{$s->name}}</a>
                    </li>
                    @endforeach
                </ul>
                @else
                <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false"><i class="icofont-sale-discount"></i>Home</a>
                    </li>
                    @foreach($subjects as $s)
                    <li class="nav-item">
                        <a class="nav-link" id="{{$s->name}}-tab" data-toggle="tab" href="#{{$s->name}}{{$s->classe}}" role="tab" aria-controls="{{$s->name}}{{$s->classe}}" aria-selected="false"><i class="icofont-sale-discount"></i>{{$s->name}} {{$s->classe}}</a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
        @if(!$isTeacher)
        <div class="col-md-9">
            <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  fade  active show" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Alle Hausaufgaben</h4>
                        <div class="row mb-4 pb-2">
                            @foreach($subjects as $s)
                                @foreach($homeworks as $h)
                                    @if($s->name == $h->subject)
                                        <div class="col-md-6 mb-3">
                                            <div class="card offer-card shadow-sm 
                                                        @php
                                                            $unchecked = false;
                                                            
                                                        @endphp
                                                @foreach($uncheckedHomeworkId as $chID)
                                                    @if($chID['id'] == $h->id)
                                                        bg-success
                                                        @php
                                                            $unchecked = true;
                                                        @endphp
                                                    @endif
                                                    
                                                @endforeach">
                                                <div class="card-body">
                                                    @php
                                                        $teacher = App\User::where('name', $h->teacher)->first();
                                                        $shortInfo = substr($h->task, 0, 200);
                                                        if(strlen($shortInfo) == 200){
                                                            $shortInfo = $shortInfo."...";
                                                        }
                                                    @endphp
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="card-title"><a href="/profile/{{$teacher->id}}"><img src="{{$teacher->profile->profileimage()}}"></a>{{$h->teacher}}</h5>
                                                        
                                                        <form class="form-inline" action="/hcheck/store/{{$h->id}}" method="post">
                                                        @csrf
                                                            <i class="fa fa-check"></i><input class="btn btn-link" type="submit" value="Fertig">
                                                        </form>
                                                    </div>
                                                    <h6 class="card-subtitle mb-2 text-block"><strong>{{$h->caption}}</strong></h6>
                                                    <p class="card-text">{{$shortInfo}}</p>
                                                    <a id="{{$h->subject}}-tab" data-toggle="tab" href="#{{$h->subject}}" role="tab" aria-controls="{{$h->subject}}" aria-selected="false">{{$h->subject}}</a>
                                                    <a href="/h/{{$h->id}}" class="card-link">Mehr Informationen</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="unchecked" role="tabpanel" aria-labelledby="unchecked-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Ungelesene Hausaufgaben</h4>
                        <div class="row mb-4 pb-2">
                            @foreach($subjects as $s)
                                @foreach($uncheckedHomework as $h)
                                    @if($s->name == $h->subject)
                                        <div class="col-md-6 mb-3">
                                            <div class="card offer-card shadow-sm">
                                                <div class="card-body">
                                                    @php
                                                        $teacher = App\User::where('name', $h->teacher)->first();
                                                        $shortInfo = substr($h->task, 0, 200);
                                                        if(strlen($shortInfo) == 200){
                                                            $shortInfo = $shortInfo."...";
                                                        }
                                                        
                                                    @endphp
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="card-title"><a href="/profile/{{$teacher->id}}"><img src="{{$teacher->profile->profileimage()}}"></a>{{$h->teacher}}</h5>
                                                        <a href="/h/{{$h->id}}" class="card-link text-dark" title="Klicke hier, um die Aufgabe abzuhacken"><i class="fa fa-check"></i>Fertig</a>
                                                    </div>                                                    <h6 class="card-subtitle mb-2 text-block"><strong>{{$h->caption}}</strong></h6>
                                                    <p class="card-text">{{$shortInfo}}</p>
                                                    <a id="{{$h->subject}}-tab" data-toggle="tab" href="#{{$h->subject}}" role="tab" aria-controls="{{$h->subject}}" aria-selected="false">{{$h->subject}}</a>
                                                    <a href="/h/{{$h->id}}" class="card-link">Mehr Informationen</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane  fade show" id="chronic" role="tabpanel" aria-labelledby="chronic-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Hausaufgaben Chronik</h4>
                            <div class="row mb-4 pb-2">
                                @foreach($homeworks as $h)
                                    @foreach($checkedHomework as $ch)
                                        @if($h->id == $ch['homework_id'])                 
                                        <div class="col-md-6 mb-3">
                                            <div class="card offer-card shadow-sm">
                                                <div class="card-body">
                                                    @php
                                                        $teacher = App\User::where('name', $h->teacher)->first();
                                                        $shortInfo = substr($h->task, 0, 200);
                                                        if(strlen($shortInfo) == 200){
                                                            $shortInfo = $shortInfo."...";
                                                        }
                                                    @endphp
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="card-title"><a href="/profile/{{$teacher->id}}"><img src="{{$teacher->profile->profileimage()}}"></a>{{$h->teacher}}</h5>
                                                        
                                                        <form class="form-inline" action="/hcheck/store/{{$h->id}}" method="post">
                                                        @csrf
                                                            <i class="fa fa-check"></i><input class="btn btn-link" type="submit" value="Fertig">
                                                        </form>
                                                    </div>
                                                    <h6 class="card-subtitle mb-2 text-block"><strong>{{$h->caption}}</strong></h6>
                                                    <p class="card-text">{{$shortInfo}}</p>
                                                    <a id="{{$h->subject}}-tab" data-toggle="tab" href="#{{$h->subject}}" role="tab" aria-controls="{{$h->subject}}" aria-selected="false">{{$h->subject}}</a>
                                                    <a href="/h/{{$h->id}}" class="card-link">Mehr Informationen</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex justify-content-center mt-5">
                                                <p>Die Aufgabe wurde am: <strong>@if($ch['created_at'] != null){{App\HomeworkCheck::where('id', $ch['id'])->first()->created_at->format('jS F Y h:i:s A')}}@endif</strong> von dir abgehackt.</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    @foreach($subjects as $s)
                    <div class="tab-pane  fade show" id="{{$s->name}}" role="tabpanel" aria-labelledby="{{$s->name}}-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">{{$s->name}} Hausaufgaben</h4>
                        <div class="row mb-4 pb-2">
                            @foreach($homeworks as $h)
                                @if($s->name == $h->subject)
                                
                                <div class="col-md-6 mb-3">
                                            <div class="card offer-card shadow-sm">
                                                <div class="card-body">
                                                    @php
                                                        $teacher = App\User::where('name', $h->teacher)->first();
                                                        $shortInfo = substr($h->task, 0, 200);
                                                        if(strlen($shortInfo) == 200){
                                                            $shortInfo = $shortInfo."...";
                                                        }
                                                        
                                                    @endphp
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="card-title"><a href="/profile/{{$teacher->id}}"><img src="{{$teacher->profile->profileimage()}}"></a>{{$h->teacher}}</h5>
                                                        <a href="/hcheck/store/{{$h->id}}" class="card-link text-dark" title="Klicke hier, um die Aufgabe abzuhacken"><i class="fa fa-check"></i>Fertig</a>
                                                    </div>          
                                                    <h6 class="card-subtitle mb-2 text-block"><strong>{{$h->caption}}</strong></h6>
                                                    <p class="card-text">{{$shortInfo}}</p>
                                                    <a id="{{$h->subject}}-tab" data-toggle="tab" href="#{{$h->subject}}" role="tab" aria-controls="{{$h->subject}}" aria-selected="false">{{$h->subject}}</a>
                                                    <a href="/h/{{$h->id}}" class="card-link">Mehr Informationen</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
                    <!-- was passiert da? oder wo finde ich die Seite?-->
        <div class="col-md-9">
            <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active  fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Willkommen im Hausaufgabenpanel</h4>
                        <div class="row mb-4 pb-2">
                                <div class="col-md-6 mb-3">
                                            <div class="card offer-card shadow-sm">
                                                <div class="card-body">
                                                    
                                                        
                                                    
                                                </div>
                                            </div>
                                        </div>
                        </div>
                    </div>
                    @foreach($subjects as $s)

                    <div class="tab-pane fade show" id="{{$s->name}}{{$s->classe}}" role="tabpanel" aria-labelledby="{{$s->name}}{{$s->classe}}-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">{{$s->name}} {{$s->classe}} Hausaufgaben</h4>
                        <div class="row mb-4 pb-2">
                            @foreach($homeworks as $h)
                                @if($s->name == $h->subject)
                                
                                <div class="col-md-6 mb-3">
                                            <div class="card offer-card shadow-sm">
                                                <div class="card-body">
                                                    @php
                                                        $teacher = App\User::where('name', $h->teacher)->get();
                                                        $shortInfo = substr($h->task, 0, 200);
                                                        if(strlen($shortInfo) == 200){
                                                            $shortInfo = $shortInfo."...";
                                                        }
                                                        
                                                    @endphp
                                                    <h5 class="card-title"><a href="/profile/{{$teacher[0]->id}}"><img src="{{$teacher[0]->profile->profileimage()}}"></a>{{$h->teacher}}</h5>
                                                    <h6 class="card-subtitle mb-2 text-block"><strong>{{$h->caption}}</strong></h6>
                                                    <p class="card-text">{{$shortInfo}}</p>
                                                    <a id="{{$h->subject}}-tab" data-toggle="tab" href="#{{$h->subject}}" role="tab" aria-controls="{{$h->subject}}" aria-selected="false">{{$h->subject}}</a>
                                                    <a href="/h/{{$h->id}}" class="card-link">Mehr Informationen</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                    <a role="button" href="/h/create" class="btn btn-success btn-submit mt-4">Hausaufgabe veröffentlichen</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
