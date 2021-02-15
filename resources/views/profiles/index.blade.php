@extends('layouts.app')

@section('content')
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#profile" id="profile" class="a_show-hide">Über mich</a>
  <a href="#posts" id="posts" class="a_show-hide">Beiträge</a>
  @if($user->id == auth()->user()->id)
  <a href="#marks" id="marks" class="a_show-hide">Noten</a>
  <a href="#contact" id="contact" class="a_show-hide">Benachrichtigen</a>
  @else
  <a href="#contact2" id="contact2" class="a_show-hide">Kontaktieren</a>
  @endif
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()" class="pl-5"><button type="button" class="btn btn-success btn-lg btn3d"> Profile</button></span>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
    <div class="container">
        <div class="div_profile profile_sec">
            <div class="row">
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle image-responsive w-100">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-block">
                        <h1 class="pt-3">{{ $user->username }}</h1>
                        
                        <div class="d-flex">
                            <div class="pr-4"><strong>{{ $postsCount }}</strong> posts</div>
                            <div class="pr-4"><strong>{{ $followersCount }}</strong> followers</div>
                            <div class="pr-4"><strong>{{ $followingsCount }}</strong> following</div>
                            
                        </div>
                        <div class="d-flex">
                            <div class="pl-5">
                                @cannot ('update', $user->profile)
                                    <follow-button class="pl-3" user-id="{{ $user->id }}" follows="{{ $follows}}"></follow-button>
                                @endcannot
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="div_posts profile_sec">
        <div style="background: url(https://c4.wallpaperflare.com/wallpaper/515/115/741/spacex-spacesuit-elon-musk-wallpaper-thumb.jpg)" class="page-holder bg-cover">


            <header class="text-center text-white py-5">
                <h1 class="display-4 font-weight-bold mb-4">Beiträge</h1>
            </header>
        </div>
        @can ('update', $user->profile)
            <div class="d-flex justify-content-center pt-4">
                <a href="/p/create" class="btn btn-sp btn-sp-white btn-animate">Add a post</a>
            </div>
        @endcan
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
    @if($user->id == auth()->user()->id)
    <div class="div_marks profile_sec" >
        <div style="background: url(https://images-cdn.9gag.com/photo/aYYYxpV_700b.jpg)" class="page-holder bg-cover">


            <header class="text-center text-white py-5">
                <h1 class="display-4 font-weight-bold mb-4">Deine Noten</h1>
            </header>
        </div>

        <div class="d-flex justify-content-center pt-5">
            <h3>Zuletzt hinzugefügt</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fach</th>
                                <th scope="col">Note</th>
                                <th scope="col">Bemerkung</th>
                                <th scope="col">Fachlehrer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marks as $m)
                                <tr>
                                    <th scope="row">{{$m->id}}</th>
                                    <td>{{$m->subject}}</td>
                                    <td>{{$m->mark}}</td>
                                    <td>{{$m->description}}</td>
                                    <td>{{$m->teacher}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-5">
            <div class="d-block">
                <h3>Sieh dir ein anderes Fach an</h3>
                <a href="/m">Sieh dir deine komplette Notenübersicht an!</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <form class="form-inline" action="/m/find" method="post">
                    @csrf
                        <div class="d-block">
                            <div class="form-group">
                                <label for="subject">Fächer</label>
                                <select class="form-control" id="subject" name="subject">
                                    @foreach($subjects as $s)
                                        <option>{{$s->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mb-2 mt-5">Bestätigen</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <div class="div_contact profile_sec">
        
            <div style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVkVAqC90Ovwf1zgjfSXlGLtpMgPHaNaL5wg&usqp=CAU)" class="page-holder bg-cover">


                <header class="text-center text-white py-5">
                    <h1 class="display-4 font-weight-bold mb-4">Deine Benachrichtigungen</h1>
                </header>
            </div>
            

            <div class="row mt-5">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">
                        <div class="filter-result">
                            <p class="mb-30 ff-montserrat">Benachrichtigungen: {{$notifications->count()}}</p>
                            @foreach($notifications as $n)
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30" style="@if($n->checked == 'unchecked')background-color:#badc58;@endif">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                        {{$n->id}}
                                    </div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">{{$n->content}}</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-pin mr-2"></i> {{$n->type}}
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-money mr-2"></i> {{$n->sender}}
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-time mr-2"></i> {{$n->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="/notification/uncheck/{{$n->id}}" class="btn d-block w-100 d-sm-inline-block btn-light">Ansehen</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

        
                </div>
            </div>
    </div>
    @endif
    <div class="div_contact2 profile_sec">
        salutsava?
    </div>
</div>
<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mySidenav").style.height = "100vh";
        document.getElementById("main").style.marginLeft = "250px";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        // beim Laden des Dokuments das Div-Element mit der CSS Klasse div_show-hide
        // auf display:none; setzen
        $(".profile_sec").hide();
        $(".a_show-hide").show();
        $(".div_profile").show();
        // bei anklicken des Links mit der CSS Klasse a_show-hide,
        // wird der Div-Container ein- und ausgeblendet
        $('.a_show-hide').click(function() {
            $(".profile_sec").hide();
            var div_id = ".div_" + $(this).attr('id');
            $(div_id).slideToggle();
        });
    });
</script>
@endsection

