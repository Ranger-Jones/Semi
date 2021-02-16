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
                                        <h1>Die Produktvorstellung vom T-21</h1>
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
                        <div class="col-6" style="font-size: 16px;">
                            <ul class="list-group">
                                <li class="list-group-item">1.	Die Konsequenzen von Online-Learning an unserer Schule
                                    <ul class="list-group">
                                        <li class="list-group-item">1.1	Entstehung und Entwicklung der Idee</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">2.	Das Design & die Funktionen der Website 
                                    <ul class="list-group">
                                        <li class="list-group-item">2.1	Entwicklung</li>
                                        <li class="list-group-item">2.2	Sprachen</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">3.	Das Back-End
                                    <ul class="list-group">
                                        <li class="list-group-item">3.1 Planung und Herangehensweise</li>
                                        <li class="list-group-item">3.2 Verständigung mit Git</li>
                                        <li class="list-group-item">3.3 Laravel als Framework</li>
                                        <li class="list-group-item">3.4	Codebeispiel</li>
                                        <li class="list-group-item">3.5	Fehler bei der Entwicklung</li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-6" style="font-size: 16px;">
                            <ul class="list-group">
                                
                                <li class="list-group-item">4.	Die Lösung
                                    <ul class="list-group">
                                        <li class="list-group-item">4.1	Form</li>
                                        <li class="list-group-item">4.2	Bauprozess</li>
                                        <li class="list-group-item">4.3	Funktion</li>
                                        <li class="list-group-item">4.4	Material</li>
                                        <li class="list-group-item">4.5	Werkzeuge & Gerätschaften</li>
                                        <li class="list-group-item">4.6	Nieten</li>
                                        <li class="list-group-item">4.7	Farbe</li>
                                        <li class="list-group-item">4.8	Preis</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">5.	Die Hardware Auswahl
                                    <ul class="list-group">
                                        <li class="list-group-item">5.1	Kriterien</li>
                                        <li class="list-group-item">5.2	Komponenten</li>
                                        <li class="list-group-item">5.3	Fehler bei der Inkraftsetzung</li>
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
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">1. Die Konsequenzen von Online-Learning an unserer Schule</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 class="display-4">1.1	Entstehung und Entwicklung der Idee</h1>
                                    </div>
                                </div>
                            </div>
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
                                <h1 class="display-1">2. Das Design & die Funktionen der Website </h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/frontend.png" class="img-responsive" alt="">
                                    <a href="/vbg" target="_blank" class="btn btn-large btn-primary text-center" style="height: 200px; margin-left: 65px; font-size:100px;"> Website </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">2.1 Die Entwicklung der Startseite</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-12 mt-3">
                                    <img src="/img/startseite.png" style="height: 600px;" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">2.1 Die Entwicklung der Hausaufgaben</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-12 mt-3">
                                    <img src="/img/hausaufgaben.png" class="img-responsive" alt="">
                                    <a href="/h" target="_blank" class="btn btn-large btn-primary text-center" style="height: 200px; margin-left: 65px; font-size:100px;"> Website </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- ACHTUNG BAUSTOPPPPPPPPPPPPPPPP------------------------------------------------------------------------->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">2.1 Die Entwicklung der Noten</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-12 mt-3">
                                    <img src="/img/noten.png" class="img-responsive" alt="">
                                    <a href="/m" target="_blank" class="btn btn-large btn-primary text-center" style="height: 200px; margin-left: 65px; font-size:100px;"> Website </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">2.2 Sprachen</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-3 mt-3">
                                    <img src="/img/csslogo.png" class="img-responsive" style="max-height: 400px;" alt="">
                                </div>
                                <div class="col-3 mt-3">
                                    <img src="/img/jslogo.png" class="img-responsive" style="max-height: 400px;" alt="">
                                </div>
                                <div class="col-3 mt-3">
                                    <img src="/img/jquery.gif" class="img-responsive" style="max-height: 400px;" alt="">
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
                                <h1 class="display-1">3. Das Back-End</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 style="font-size: 40px;">Der Kern der Website</h1>
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
                                <h1 class="display-4">3.1 Die Herangehensweise</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 style="font-size: 40px;">Was wird benötigt?</h1>
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
                                <h1 style="font-size: 50px;">System-Context-Diagram</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/scd.png" style="height: 600px;" class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Die Programmiersprache</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/web-languages.png" style="max-height: 700px;" class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Das Framework</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/framework-php.png" style="max-height: 600px;" class="img-responsive" alt="">
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
                                <h1 class="display-4">3.2 Die Verständigung mittels Git</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 style="font-size: 40px;">Das Tool zur Kommunikations innerhalb der Gruppe.</h1>
                                    </div>
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
                                <h1 class="display-4">3.3 Laravel als Framework</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 style="font-size: 40px;">Inwieweit erleichtert ein Framework den Arbeitsprozess?</h1>
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
                                <h1 style="font-size: 40px;">Funktionen und Bibliotheken</h1>
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
                                <h1 style="font-size: 50px;">Model-View-Controller</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" style="height: 600px" class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Routing</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <h3><a href="/h" style="font-size: 60px;"target="_blank" class="text-dark">/h</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/routing-code.png" style="max-height: 700px; " class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Der Controller</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" style="height: 600px" class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Der Controller</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/controller-index.png" style="max-height: 900px; " class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Der Controller</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/controller-code.png" style="height: 900px; " class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Das Modell</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" style="height: 700px;" class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Das Modell</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-between">
                                    <img src="/img/umodel-code.png" style="max-height: 700px; " class="img-responsive" alt="">
                                    <img src="/img/hmodel-code.png" style="max-height: 700px; " class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Die Datenbank</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/migration.png" style="max-height:800px; " class="img-responsive pl-5" alt="">
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
                                <h1 style="font-size: 50px;">Die Anischt</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/mvc-d.jpg" style="height: 700px;" class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Sicherheit</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/security.jpg" style="height: 700px;" class="img-responsive" alt="">
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
                                <h1 style="font-size: 50px;">Entwicklung</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/trends.png" style="height: 700px;" class="img-responsive" alt="">
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
                                <h1 class="display-4">3.5 Fehler bei der Entwicklung</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 style="font-size: 40px;">Kommunikation, Zeitmanagement, Übersichtlichkeit</h1>
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
                                <h1 class="display-1">4. Die Lösung</h1>
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
                                <h1 class="display-4">4.1 Die Form</h1>
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
                                <h1 class="display-4">4.2 Der Bauprozess</h1>
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
                                <h1 class="display-4">4.2 Der Bauprozess</h1>
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
                                <h1 class="display-4">4.2 Der Bauprozess</h1>
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
                                <h1 class="display-4">4.2 Der Bauprozess</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/b-1.JPG" style="max-height: 700px; " class="img-responsive" alt="">
                                    <img src="/img/b-2.JPG" style="max-height: 700px; " class="img-responsive" alt="">
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
                                <h1 class="display-4">4.3 Die Funktion</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-12 mt-3">
                                    <a href="/schulnews/6" target="_blank" class="btn btn-large btn-primary text-center" style="height: 200px; margin-left: 65px; font-size:100px;"> Website </a>
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
                                <h1 class="display-4">4.4 Das Material</h1>
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
                                <h1 class="display-4">4.5 Die Werkzeuge</h1>
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
                                <h1 class="display-4">4.5 Werkzeuge</h1>
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
                                <h1 class="display-4">4.5 Werkzeuge</h1>
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
                                <h1 class="display-4">4.6 Die Nieten</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <video muted autoplay loop width="1000" id="video"> 
                                        <source src="/img/nieten.mp4" type="video/mp4" />  <!-- Declaring it is a video and from where the file should be played from -->
                                    </video>
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
                                <h1 class="display-4">4.7 Die Farben</h1>
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
                                <h1 class="display-4">4.8 Preis</h1>
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
                                <h1 class="display-1">5. Die Hardware</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 style="font-size: 40px;"></h1>
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
                                <h1 class="display-4">5.1 Kriterien</h1>
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
                                <h1 class="display-4">5.2 Komponenten</h1>
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
            <div class="carousel-item" id="#planing">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-4">5.3 Fehler bei der Entwicklung</h1>
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
            <!-- **Umweltpart von Josh** -->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">6. Umweltaspekt</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="nav-textt-b">
                                        <h1 style="font-size: 40px;"></h1>
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
                                <h1 style="font-size: 50px;">Papierherstellung und Server</h1>
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
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-12 mt-3">
                                    <a href="/schulnews/7" target="_blank" class="btn btn-large btn-primary text-center" style="height: 200px; margin-left: 65px; font-size:100px;"> Website </a>
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
                                <h1 class="display-1">7. Datenschutz</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-12 mt-3">
                                    <a href="/schulnews/3" target="_blank" class="btn btn-large btn-primary text-center" style="height: 200px; margin-left: 65px; font-size:100px;"> Website </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fazit-->
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <div class="d-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1">8. Fazit</h1>
                                <hr>
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
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-center text-center">
                                    <a href="/kolloquium/quellen"  class="btn btn-primary text-white" style="font-size: 200px; ">Quellen</a>
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