@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <div class="d-block">
                    <p class="display-4">Dein Benachrichtigungslog</p>
                    <div class="d-flex justify-content-center">
                        <form action="/notification/uncheck/all" method='post'>
                            @csrf
                            <button class="notification-btn btn-primary">All Nachrichten als gelesen markieren</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($notifications as $notification)
        <div class="row pt-5 pb-2"> 
            <div class="col-9 notification-bg">
                <a href="/notification/uncheck/{{$notification->id}}">
                    <div class="d-flex justify-content-around">
                        <div class="pt-3 d-flex">
                            <p class="font-weight-bold notification-type pr-2">
                                Typ:
                            </p>
                            <p class="notification-type">
                                {{$notification->type}}
                            </p>
                        </div>
                        <div class="pt-3 d-flex">
                            <p class="font-weight-bold notification-type pr-2">
                                Inhalt:
                            </p>
                            <p class="notification-type">
                                {{$notification->content}}
                            </p>
                        </div>
                        <div class="pt-3 d-flex">
                            <p class="font-weight-bold notification-type pr-2">
                                Sender:
                            </p>
                            <p class="notification-type">
                                {{$notification->sender}}
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-1">
                <div class="align-items-center pt-4 pr-3">
                    <div class="notification-arrow">

                    </div>
                </div>
            </div>

            <div class="col-2 notification-date-text">
                {{$notification->created_at}}
            </div>
        </div>
    @endforeach
</div>
@endsection

