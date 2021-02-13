@extends('layouts.intro')

@section('content')
<div class="container-fluid mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="false">
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
                        <div class="col-6">
                            <h1>Software</h1>
                            <ul class="list-group">
                                <li class="list-group-item">1.	Die Konsequenzen von Online-Learning an unserer Schule
                                    <ul class="list-group">
                                        <li class="list-group-item">a.	Entstehung und Entwicklung der Idee</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">2.	Das Design der Website
                                    <ul class="list-group">
                                        <li class="list-group-item">a.	Funktionen</li>
                                        <li class="list-group-item">b.	Effizienz</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">3.	Das Back-End
                                    <ul class="list-group">
                                        <li class="list-group-item">a.	Planung und Herangehensweise</li>
                                        <li class="list-group-item">b.	Verständigung mit Git</li>
                                        <li class="list-group-item">c.	Laravel als Framework</li>
                                        <li class="list-group-item">d.	Codebeispiel</li>
                                        <li class="list-group-item">e.	Fehler bei der Entwicklung</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h1>Hardware</h1>
                            <ul class="list-group">
                                <li class="list-group-item">4.	Die Hardware Auswahl
                                    <ul class="list-group">
                                        <li class="list-group-item">a.	Kriterien</li>
                                        <li class="list-group-item">b.	Fehler bei der Inkraftsetzung</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">5.	Die Lösung
                                    <ul class="list-group">
                                        <li class="list-group-item">a.	Vorteile</li>
                                        <li class="list-group-item">b.	Nachteile</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">6.	Umweltaspekt</li>
                                <li class="list-group-item">7.	Datenschutz & -sicherheit</li>
                                <li class="list-group-item">8.	Preisvorstellung</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1">Bauprozess</h1>
                            <hr>
                        </div>
                        <div class="col-12 mt-5">
                            <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Planung</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <pre>
                                        <code>
                                            Route::get('/h', 'HomeworkController@index');
                                            Route::get('/h/create', 'HomeworkController@create');
                                            Route::get('/h/{homework}', 'HomeworkController@show');
                                            Route::post('/h/store', 'HomeworkController@store');
                                        </code>
                                    </pre>
                                </div>
                            </div>
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