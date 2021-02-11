@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
    
 

<div class="col-sm-4">
    <div class="widget single-news">
        <div class="image">
            <img src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" class="img-responsive">
            <span class="gradient"></span>
        </div>
        <div class="details">
            <div class="category"><a href="">News</a></div>
            <h3><a href="">"Es bleibt alles so wie es ist" - Chefin</a></h3>
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
</div>

    @if($isTeacher)
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <div class="d-block">
            <form action="/schulnews/create">
                @csrf
                <input type="submit" class="btn btn-success mt-3" value="Neuer Beitrag" />

            </form>
          </div>
        </div>
      </div>
    </div>
@endif
    <hr class="pb-5">

    <div class="row article p-4">
        <div class="col-4">
            <img class="img-responsive w-100 image1" src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" alt="Image not found">
        </div>
        <div class="col-8">
            <div class="d-flex off">
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
</div>
@endsection
