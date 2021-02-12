@extends('layouts.intro')

@section('content')
<div class="container-fluid mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner bg-info" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1">Einleitung</h1>
                            <hr>
                        </div>
                        <div class="col-12">
                            <p>Etwas schönes erzählen</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1">Gliederung</h1>
                            <hr>
                        </div>
                        <div class="col-12 mt-5">
                            <ul class="list-group">
                                <li class="list-group-item">1.	Die Konsequenzen von Online-Learning an unserer Schule</li>
                                <li class="list-group-item">2.	Das Design der Website</li>
                                <li class="list-group-item">3.	Das Back-End</li>
                                <li class="list-group-item">4.	Die Hardware Auswahl</li>
                                <li class="list-group-item">5.	Die Lösung</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<script>
$(document).ready(function() {      
        $('.carousel').carousel('pause');
        $('.carousel').carousel({
  interval: false,
});
    });

$(document).keydown(function(e) {
    if (e.keyCode === 37) {
        // Previous
        $(".carousel-control.left").click();
        return false;
    }
    if (e.keyCode === 39) {
        // Next
        $(".carousel-control.right").click();
        return false;
    }
});
</script>
@endsection