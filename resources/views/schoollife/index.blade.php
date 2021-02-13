@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="d-flex justify-content-center">
            <div>
                <h1>Das Schulleben im von-Bülow-Gymnasium</h1>
                <p></p>
            </div>
        </div>  
    </div>
    <div style="background-color: black;">
        <ul class="navbar-nav m-auto">
            <div id="navbar">
                <div class="row stickyDiv">
                    <div class="col-sm-4">
                        <div class="widget single-news">
                            <li class="nav-item">
                                <a class="nav-link nav-textt nav-link-text {{ (request()->segment(1) == 'register') ? 'active' : '' }}" href="#news">Schulnews</a>
                            </li>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget single-news">
                            <div class="image"> 
                                <span class="gradient"></span>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link nav-textt nav-link-text {{ (request()->segment(1) == 'register') ? 'active' : '' }}" href="#teacher">Lehrer</a>
                            </li>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget single-news">
                            <div class="image"> 
                                <span class="gradient"></span>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link nav-textt nav-link-text {{ (request()->segment(1) == 'register') ? 'active' : '' }}" href="#history">Historie der Schule</a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </ul> 
    </div>                
    <hr class="pb-5">
    

    <div class="row" id="news">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <div>
                    <h2>Schulnews</h2>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <p>Sie interessieren sich für die neuesten Ereignisse unser Schule? Dann sind Sie hier an der richtigen Stelle!</p>
                </div>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-sm-4">
            
            <a href="">
                <div class="widget single-news">
                    <div class="image">
                        <span class="newsimage">
                            <img src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" class="img-responsive newsarticle">
                        </span>
                        <span class="gradient"></span>
                    </div>
                    <div class="details">
                        <div class="category"><a href="">News</a></div>
                        <h3><a href="">"Es bleibt alles so wie es ist" - Chefin</a></h3>
                        <time>Today, 05 February</time>
                    </div>
                </div>
            </a>
            
        </div>
    
        <div class="col-sm-4">
            <div class="widget single-news">
                <div class="image">
                    <img src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" class="img-responsive">
                    <span class="gradient"></span>
                </div>
                <div class="details">
                    <div class="category"><a href="">News</a></div>
                    <h3><a href="">Die 12er freuen sich auf die Prüfungen</a></h3>
                    <time>Today, 05 February</time>
                </div>
            </div>
        </div>
    
        <div class="col-sm-4">
            <div class="widget single-news">
                <div class="image">
                    <img src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" class="img-responsive">
                    <span class="gradient"></span>
                </div>
                <div class="details">
                    <div class="category"><a href="">News</a></div>
                    <h3><a href="">Wird alles auf Weihnachten verschoben?!</a></h3>
                    <time>Yesterday, 04 February</time>
                </div>
            </div>
        </div>
    </div> 

    <hr class="pb-5">

    <div class="row article p-4">
        <div class="col-4">
            <img class="img-responsive w-100 image1" src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" alt="Image not found">
        </div>
        <div class="col-8">
            <div class="d-flex">
                <div>
                    <h3><strong>Die Kolloquien werden bis auf weiteres verschoben!</strong></h3>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <span class="badge" id="badge">Oberstufe</span> 
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>Name</strong></span>
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>Datum</strong></span>
                    <p></p>
                    <p>Die Autisten der 12. Klasse sind in völliger Aufruhr.</p>  
                </div>
            </div>
        </div>
    </div>

    <!--
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
-->
    <hr class="pb-5">

    <div class="row" id="teacher">
      <div class="col-12">
         <div class="d-flex justify-content-center">
             <div>
                 <h2>Lehrer</h2>
             </div>
         </div>
         <div class="d-flex justify-content-center">
             <div>
                 <p>Hier finden Sie alle Email-Adressen der Lehrer:</p>
             </div>
         </div>
      </div>
      <div class="row">
        <div class="col-12 offset-7">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail-Adresse</th>
                        <th scope="col">Fächerkombination</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mustermann, Max</td>
                            <td>max.mustermann@schule.de</td>
                            <td>Deutsch, Mathe</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Smith, John</td>
                            <td>john.smith@schule.de</td>
                            <td>Englisch, Ethik</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Rossi, Mario</td>
                            <td>mario.rossi@schule.de</td>
                            <td>Italienisch, Kunst</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Dupont, Jean</td>
                            <td>jean.dupont@schule.de</td>
                            <td>Französisch, Musik</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
     <!--Lehreremails noch einfügen-->
    </div>       

    <hr class="pb-5">

    <div class="row" id="history">
        <div class="col-12">
        <div class="d-flex justify-content-center">
            <div>
                <h2>Historie der Schule</h2>
            </div>
        </div>
        </div>
        <section id="news" class="white-bg padding-top-bottom">
            <div class="timeline">
                <div class="date-title">
                    <span>18. Jahrhundert</span>
                </div>
                <div class="row">
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1764</p>
                            </div>
                            <h2 class="news-title">Gründung der Brüdergemeine Neudietendorf</h2>
                            <p>Obwohl die Neudietendorfer Brüdergemeine in sich schon länger bestand, wird 1764 als das offizielle Gründungsjahr<span id="dots">...</span><span id="more">der Neudietendorfer Brüdergemeine bezeichnet. Mit steigender Einwohnerzahl musste neben einer Kirche und einigen Manufakturen auch eine Schule gebaut werden. Dort sollten Anfangs vor allem die Kinder der Missionare unterrichtet werden, um durch die ständige Abwesenheit der Eltern einen Familienersatz dargestellt zu bekommen. Ab dem 19. Jahrhundert, sollte das Schulsystem erheblich erweitert werden und auch für Kinder, die nicht Teil der Gemeine waren, zugänglich sein. Auch der Adel setzte auf die Ausbildung der Herrnhuter, da sie stets auf christlicher Grundlage stattfand.</span></p>
                            <a class="read-more" onclick="Readmore()" id="myBtn" style="cursor:pointer">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1760 & 1765</p>
                            </div>
                            <h2 class="news-title">Gründung der ersten Mädchen- und Knabenschule</h2>
                            <p>Obwohl die Neudietendorfer Brüdergemeine in sich schon länger bestand, wird 1764 als das offizielle Gründungsjahr<span id="dots">...</span><span id="more">der Neudietendorfer Brüdergemeine bezeichnet. Mit steigender Einwohnerzahl musste neben einer Kirche und einigen Manufakturen auch eine Schule gebaut werden. Dort sollten Anfangs vor allem die Kinder der Missionare unterrichtet werden, um durch die ständige Abwesenheit der Eltern einen Familienersatz dargestellt zu bekommen. Ab dem 19. Jahrhundert, sollte das Schulsystem erheblich erweitert werden und auch für Kinder, die nicht Teil der Gemeine waren, zugänglich sein. Auch der Adel setzte auf die Ausbildung der Herrnhuter, da sie stets auf christlicher Grundlage stattfand.</span></p>
                            <a class="read-more" onclick="Readmore()" id="myBtn" style="cursor:pointer">Mehr anzeigen</a>
                        </div>
                    </div>
                </div>
                <div class="date-title">
                    <span>19. Jahrhundert</span>
                </div>
                <div class="row">
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1845</p>
                            </div>
                            <h2 class="news-title">Gründung der Pensions - Knabensanstalt</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                        <div class="date">
                                <p>1850</p>
                            </div>
                            <h2 class="news-title">Gründung der Mädchenanstalt</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1861</p>
                            </div>
                            <h2 class="news-title">Der Neubau</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                </div>
                <div class="date-title">
                    <span>20. Jahrhundert</span>
                </div>
                <div class="row">
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1920</p>
                            </div>
                            <h2 class="news-title">Gründung des Erdmuth-Dorotheen-Haus</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1923</p>
                            </div>
                            <h2 class="news-title">Erlangen der Prüfungsreife</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1933/1934</p>
                            </div>
                            <h2 class="news-title">Der Umbau</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1944</p>
                            </div>
                            <h2 class="news-title">Die Verstaatlichung</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1945</p>
                            </div>
                            <h2 class="news-title">Erlangen der Prüfungsreife</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1949</p>
                            </div>
                            <h2 class="news-title">Gründung der DDR</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1970er</p>
                            </div>
                            <h2 class="news-title">Modernisierung</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1989 - 1994</p>
                            </div>
                            <h2 class="news-title">Die Wende und ihre Folgen</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1991</p>
                            </div>
                            <h2 class="news-title">Der Umbruch vom EOS auf das Gymnasium</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1997</p>
                            </div>
                            <h2 class="news-title">Umbenennung zum von-Bülow-Gymnasium</h2>
                            <p></p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <small>Quelle: http://wordpress.von-buelow-gymnasium.de/schulgeschichte/</small>
    </div>



</div>


<script>


function Readmore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
@endsection
