@extends('layouts.intro')

@section('content')
<div class="container-fluid mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="false">
        <div class="carousel-inner bg-info" role="listbox">
            <!-- Einstieg -->
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <img src="/img/logo.png" alt="" class="mr-5" style=" max-height: 200px; border-right: 1px solid #333">
                                <div class="pt-1 pr-5 nav-textt-b" style="font-size: 24px;">
                                    von-Bülows Odysee
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1>Eine Produktvorstellung</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gliederung -->
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
            <!-- Joshs Part kommt ab hier -->
            <!-- |Design der Website| -->
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Das Design der Website</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Ein Beitrag von Joshua Nerling</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rangers Part kommt ab hier -->
            <!-- |Das Backend| -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Das Back-End</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Ein Beitrag von Jonas Niklas Barfknecht</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- |Die Herangehensweise| -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">Die Herangehensweise</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Was wird benötigt?</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Das System-Context-Diagram</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/scd.png" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Welche Programmiersprache ist geeignet?</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/web-languages.png" style="max-height: 500px;" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Frage nach einem Framework</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/framework-php.png" style="max-height: 500px;" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- |Verständigung mithile von Git| -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">Die Verständigung mittels Git</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Das Tool zur Kommunikations innerhalb der Gruppe.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Git? Wie funktioniert das?</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/git-logo.png" style="max-height: 300px;" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- |Laravel als Framework| -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">Laravel als Framework</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Inwieweit erleichtert ein Framework den Arbeitsprozess?</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Was steckt alles in Laravel?</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/frameworks.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Model-View-Controller Architektur</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Das "Routing" auf der Website</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <h3><a href="/h" target="_blank" class="text-dark">/h</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/routing-code.png" style="max-height: 500px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Model-View-Controller Architektur</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Der Controller</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/controller-index.png" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Der Controller</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/controller-code.png" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Model-View-Controller Architektur</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Das Model</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/umodel-code.png" style="max-height: 450px; " class="img-responsive pl-5" alt="">
                                    <img src="/img/hmodel-code.png" style="max-height: 450px; " class="img-responsive pr-5" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Datenbank</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/migration.png" style="max-height: 450px; " class="img-responsive pl-5" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Model-View-Controller Architektur</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die View</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h2>Auf zum Code!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>minimierte Sicherheitsrisiken durch Laravel</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/security.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Hohes Maß an Support</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/trends.png" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- |Fehler bei der Entwicklung| -->
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">Fehler bei der Entwicklung</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Kommunikation, Zeitmanagement, Übersichtlichkeit</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Alex Part kommt ab hier -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Der Bauprozess des Terminals</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Form</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/geruest.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Der Standfuß</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/Standfuss.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Säule</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/sauele.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Das Touchscreengehäuse</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/touchscrreng.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Funktionsweise</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/fertig.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Das Material</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/alublech.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Werkzeuge</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/fertig.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Tafelschere</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/tafelschere.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row mt-3">
                            <div class="col-12">
                                <h1>Die Kantbank - klein & groß</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <img src="/img/kantbank.JPG" class="mr-5 img-responsive" style="max-height: 500px; " alt="">
                                    <img src="/img/kantbankg.JPG" class="ml-5 img-responsive" style="max-height: 500px; " alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Nieten</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="view">
                                        <video class="video-fluid" autoplay loop muted style="max-height: 700px; ">
                                            <source src="/img/nieten.mp4" type="video/mp4" />
                                        </video>
                                        <div class="mask rgba-indigo-light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Die Farben</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/fertig.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1>Preis des Terminals</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/fertig.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Joans Part kommt ab hier -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Die Hardware Auswahl</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Ein Beitrag von Joan William Lange</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row mt-3">
                            <div class="col-12">
                                <h1>Welche Kriterien sind zu beachten? Weg zu den 2 Produkten</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img src="/img/vbg-logo.png" style="max-height: 500px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row mt-3">
                            <div class="col-12">
                                <h1>Raspberry Pi 3 & Viewsonic TD2220-2</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <img src="/img/raspi.png" class="mr-5 img-responsive" style="max-height: 500px; " alt="">
                                    <img src="/img/bildschirm.jpg" class="ml-5 img-responsive" style="max-height: 500px; " alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- **Umweltpart von Josh** -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Umweltaspekt</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Ein Beitrag von Joshua Nerling</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row mt-3">
                            <div class="col-12">
                                <h1>Paierherstellung & Server</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <img src="/img/papier.png" class="img-responsive mr-5" style="max-height: 450px;" alt="">
                                    <img src="/img/server.png" class="img-responsive ml-5" style="max-height: 450px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ** Datenschutz & -sicherheit von Joan-->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Datenschutz</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h3>Ein Beitrag von Joan William Lange</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quellen -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">Quellen</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <a href="/kolloquium/quellen" class="btn btn-success text-light">Auf zu den Quellen!</a>
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