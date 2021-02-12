@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="d-flex justify-content-center">
            <div>
                <h1>Das Schulleben im von-Bülow-Gymnasium</h1>
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
                    <span class="badge rounded-pill bg-primary">Oberstufe</span> 
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>Name</strong></span>
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>Datum</strong></span>
                    <p>Die Autisten der 12. Klasse sind in völliger Aufruhr.</p>  
                </div>
            </div>
        </div>
    </div>

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
                 <p>Hier finden Sie alle Email-Adressen der Lehrer</p>
             </div>
         </div>
      </div>
      <div class="row">
        <div class="col-12 offset-1">
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
                            <td>Mathe, Deutsch</td>
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
            <div class="container bootstrap snippets bootdey">
                <div class="timeline">
                    <div class="date-title">
                        <span>March 2014</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 news-item">
                            <div class="news-content">
                                <div class="date">
                                    <p>28</p>
                                    <small>Fri</small>
                                </div>
                                <h2 class="news-title">Title 1</h2>
                                <div class="news-media">
                                
                                </div>
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure…</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 news-item right">
                            <div class="news-content">
                                <div class="date">
                                    <p>27</p>
                                    <small>Thu</small>
                                </div>
                                <h2 class="news-title">Title 2</h2>
                                <div class="news-media gallery">
                                    
                                    <a class="colorbox cboxElement" href="#"></a>
                                </div>
                                <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure…</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 news-item">
                            <div class="news-content">
                                <div class="date">
                                    <p>26</p>
                                    <small>Wen</small>
                                </div>
                                <h2 class="news-title">Title 3</h2>
                                <div class="news-media video">
                                
                                </div>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized…</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 news-item right">
                            <div class="news-content">
                                <div class="date">
                                    <p>25</p>
                                    <small>Tue</small>
                                </div>
                                <h2 class="news-title">Title 4</h2>
                                <div class="news-media gallery">
                                    
                                    <a class="colorbox cboxElement" href="#"></a>
                                </div>
                                <p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains…</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="date-title">
                        <span>February 2014</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 news-item">
                            <div class="news-content">
                                <div class="date">
                                    <p>27</p>
                                    <small>Thu</small>
                                </div>
                                <h2 class="news-title">Title 5</h2>
                                <div class="news-media video">
                                    
                                </div>
                                <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 news-item right">
                            <div class="news-content">
                                <div class="date">
                                    <p>24</p>
                                    <small>Mon</small>
                                </div>
                                <h2 class="news-title">Title 6</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



</div>


<script>
$(document).ready(function() {
    var colorOrig=$(".show-button").css('background-color');
    $(".show-button").hover(
    function() {
        //mouse over
        $(this).css('background', '#ff')
    }, function() {
        //mouse out
        $(this).css('background', colorOrig)
    });
});​
</script>
@endsection
