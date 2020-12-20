@extends('layouts.app')

@section('content')
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#profile" id="profile" class="a_show-hide">Über mich</a>
  <a href="#posts" id="posts" class="a_show-hide">Beiträge</a>
  <a href="#marks" id="marks" class="a_show-hide">Noten</a>
  <a href="#contact" id="contact" class="a_show-hide">Benachrichtigen</a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">open</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="div_posts profile_sec">
        <p>Beiträge</p>
    </div>
    <div class="div_marks profile_sec" >
        <p>Noten</p>
    </div>
    <div class="div_contact profile_sec">
        <p>Kontakt</p>
    </div>
</div>
<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
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

