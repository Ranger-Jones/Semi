@extends('layouts.app')

@section('content')

<div class="blog-single gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                <article class="article">
                    <div class="article-img">
                        <img src="/storage/{{$images[0]}}" title="" alt="Img dont load">
                    </div>
                    <div class="article-title">
                        <h6><a href="#">{{$article->topic}}</a></h6>
                        <h2>{{$article->title}}</h2>
                        <div class="media">
                            <div class="avatar">
                                <img src="{{$author->profile->profileimage()}}" title="" alt="">
                            </div>
                            <div class="media-body" style="margin-right: 500px; ">
                                <label>{{$article->author}}</label>
                                <span>{{$article->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <p>{{$article->content}}</p>
                        @foreach($images as $i)
                            @if($i != '/default/symbol.jpg' && $i != $firstimage)
                                <img src="/storage/{{$i}}" alt="">
                            @endif
                        @endforeach
                    </div>
                </article>
            </div>
            <div class="col-lg-4 m-15px-tb blog-aside">
                <!-- Author -->
                <div class="widget widget-author">
                    <div class="widget-title">
                        <h3>Autor</h3>
                    </div>
                    <div class="widget-body">
                        <div class="media align-items-center">
                            <div class="avatar">
                                <img src="{{$author->profile->profileimage()}}" title="" alt="">
                            </div>
                            <div class="media-body">
                                <h6>Hallo, ich bin <br> {{$article->author}}</h6>
                            </div>
                        </div>
                        <p>{{$author->profile->description}}</p>
                    </div>
                </div>
                <!-- Latest Post -->
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Letzte Artikel</h3>
                    </div>
                    <div class="widget-body">
                        @foreach($lastarticles as $la)
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="/schulnews/{{$la->id}}">{{$la->title}}</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="/p">
                                        {{$la->author}}
                                    </a>
                                    <a class="date" href="#">
                                       {{$la->created_at}}
                                    </a>
                                </div>
                            </div>
                            @php
                                $laimages = $la->images;
                                try {
                                    $laimages = preg_split('~;~', $laimages);
                                    
                                    //removes unimportant records
                                    $last = array_key_last($laimages);
                                    unset($laimages[$last]);
                                } catch (Exception $e) {
                                    dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
                                }

                                if($laimages == []){
                                    $laimages[0] = '/default/symbol.jpg';
                                }
                            @endphp
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="/storage/{{$laimages[0]}}" title="" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection