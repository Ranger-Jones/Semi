@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="d-flex justify-content-center">
            <div>
                <h1>Das Schulleben im von-Bülow-Gymnasium</h1>
                <br>
            </div>
        </div>  
    </div>
    <div style="background-color: black;">
        <ul class="navbar-nav m-auto">
            <div id="navbar">
                <div class="row stickyDiv">
                    <div class="col-sm-4">
                        <div class="widget single-news" id="newsL">
                            <li class="nav-item">
                                <a class="nav-link nav-textt nav-link-text {{ (request()->segment(1) == 'vbg#news') ? 'active' : '' }}" href="#news">Schulnews</a>
                            </li>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget single-news" id="teacherM">
                            <li class="nav-item">
                                <a class="nav-link nav-textt nav-link-text {{ (request()->segment(1) == 'vbg#teacher') ? 'active' : '' }}" href="#teacher">Lehrer</a>
                            </li>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget single-news">
                            <li class="nav-item">
                                <a class="nav-link nav-textt nav-link-text {{ (request()->segment(1) == 'vbg#history') ? 'active' : '' }}" href="#history">Historie der Schule</a>
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
        @foreach($lastarticles as $la)
            <div class="col-sm-4">      
                <a href="/schulnews/{{$la->id}}">
                    <div class="widget single-news">
                        <div class="image">
                            <span class="newsimage">
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
                                <img src="/storage/{{$laimages[0]}}" class="img-responsive newsarticle">
                            </span>
                            <span class="gradient"></span>
                        </div>
                        <div class="details">
                            <div class="newscategory"><a href="schulnews0">{{$la->topic}}</a></div>
                            <!-- Der erste Link geht zu der Schulnews Seite, kannst du dan noch 3 andere mit einbauen? so haben wir schonmal den ersten; ich trag erstmal überall von 0 bis 3 die Anzahl ein ~ Josh -->
                            <div class="titlenews"><h3><a href="schulnews0">{{$la->title}}</a></h3></div>
                            <div class="newstime"><time>{{$la->created_at->format('jS F Y h:i:s A')}}</time></div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div> 

    <hr class="pb-5">
    @foreach ($articles as $a)
    <div class="row article-img p-4">
        <div class="col-4">
        @php
            $laimages = $a->images;
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
            <img src="/storage/{{$laimages[0]}}" class="img-responsive newsarticle">
                </div>
        <div class="col-8">
            <div class="d-flex">
                <div>
                    <h3><strong><a href="schulnews0">{{$a->title}}</a></strong></h3>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <span class="badge" id="badge">Oberstufe</span> 
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>{{$a->author}}</strong></span>
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>17. Februar</strong></span>
                    <p></p>
                    <p>{{$a->content}}</p>  
                </div>
            </div>
        </div>
    </div>
    @endforeach
<!--
    <div class="row article-img p-4">
        <div class="col-4">
            <img class="img-responsive w-100 image1" src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" alt="Image not found">
        </div>
        <div class="col-8">
            <div class="d-flex">
                <div>
                    <h3><strong><a href="schulnews0">Das Innenleben des Prototypen</a></strong></h3>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <span class="badge" id="badge">Oberstufe</span> 
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>Herr Lange</strong></span>
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>17. Februar</strong></span>
                    <p></p>
                    <p>Diese Komponenten erwecken das Terminal zum Leben!</p>  
                </div>
            </div>
        </div>
    </div>
    <div class="row article-img p-4">
        <div class="col-4">
            <img class="img-responsive w-100 image1" src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" alt="Image not found">
        </div>
        <div class="col-8">
            <div class="d-flex">
                <div>
                    <h3><strong><a href="schulnews0">Ist das überhaupt gut für die Umwelt?</a></strong></h3>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <span class="badge" id="badge">Oberstufe</span> 
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>Herr Nerling</strong></span>
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>16. Februar</strong></span>
                    <p></p>
                    <p>So umweltfreundlich ist das neue System!</p>  
                </div>
            </div>
        </div>
    </div>
    <div class="row article-img p-4">
        <div class="col-4">
            <img class="img-responsive w-100 image1" src="https://www.ingame.de/bilder/2020/05/04/13749084/1562685927-tesla-elon-musk-pokemon-minecraft-twitter-auto-spiel-RPfU0WR7nec.jpg" alt="Image not found">
        </div>
        <div class="col-8">
            <div class="d-flex">
                <div>
                    <h3><strong><a href="schulnews0">Die Sicherheit unserer Daten</a></strong></h3>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <span class="badge" id="badge">Oberstufe</span> 
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>Herr Lange</strong></span>
                    <i class="pl-2 icon-ellipsis-vertical"></i>
                    <span class="pl-2"><strong>16. Februar</strong></span>
                    <p></p>
                    <p>Das tut SCI um unsere Daten zu schützen</p>  
                </div>
            </div>
        </div>
    </div>
 -->
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
        <div class="col-12 wrap-table100  mb-5">
            <div class="table100 ver1 mb-5">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column12">#</th>
                                    <th class="cell100 column22">Name</th>
                                    <th class="cell100 column32">E-Mail-Adresse</th>
                                    <th class="cell100 column42">Fächerkombination</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>
                            <tr class="row100 body">
                                <td class="cell100 column12" scope="row">1</td>
                                <td class="cell100 column22">Mustermann, Max</td>
                                <td class="cell100 column32">max.mustermann@schule.de</td>
                                <td class="cell100 column42">Deutsch, Mathe</td>
                            </tr>
                            <tr class="row100 body">
                                <td class="cell100 column12" scope="row">2</td>
                                <td class="cell100 column22">Smith, John</td>
                                <td class="cell100 column32">john.smith@schule.de</td>
                                <td class="cell100 column42">Englisch, Ethik</td>
                            </tr>
                            <tr class="row100 body">
                                <td class="cell100 column12" scope="row">3</td>
                                <td class="cell100 column22">Rossi, Maria</td>
                                <td class="cell100 column32">maria.rossi@schule.de</td>
                                <td class="cell100 column42">Italienisch, Kunst</td>
                            </tr>
                            <tr class="row100 body">
                                <td class="cell100 column12" scope="row">4</td>
                                <td class="cell100 column22">Dupont, Jolie</td>
                                <td class="cell100 column32">jolie.dupont@schule.de</td>
                                <td class="cell100 column42">Französisch, Musik</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
                            <p>Obwohl die Neudietendorfer Brüdergemeine in sich schon länger bestand, wird 1764 als das offizielle Gründungsjahr<span id="dots1">...</span><span id="more1">der Neudietendorfer Brüdergemeine bezeichnet. Mit steigender Einwohnerzahl musste neben einer Kirche und einigen Manufakturen auch eine Schule gebaut werden. Dort sollten Anfangs vor allem die Kinder der Missionare unterrichtet werden, um durch die ständige Abwesenheit der Eltern einen Familienersatz dargestellt zu bekommen. Ab dem 19. Jahrhundert, sollte das Schulsystem erheblich erweitert werden und auch für Kinder, die nicht Teil der Gemeine waren, zugänglich sein. Auch der Adel setzte auf die Ausbildung der Herrnhuter, da sie stets auf christlicher Grundlage stattfand.</span></p>
                            <a class="read-more" onclick="readmore('dots1', 'more1', 'myBtn1')" id="myBtn1" style="cursor:pointer">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1760 & 1765</p>
                            </div>
                            <h2 class="news-title">Gründung der ersten Mädchen- und Knabenschule</h2>
                            <p>Im Laufe der Jahre bildete sich ein eigenes Schulsystem in der Gemeine. Dies beinhaltete die Gründung der ersten Mädchenschule 1760 und die Gründung der Knabenschule<span id="dots2">...</span><span id="more2"> bereits 5 Jahre später, 1765. Der genaue Standort dieser beiden Schulen, in Neudietendorf, ist nicht bekannt. Ähnlich wie in anderen Brüdergemeine-Orten, sind sicherlich auch in Neudietendorf in jeweils einem Klassenraum getrennt, die Mädchen im Schwestern- und die Jungen im Brüderhaus unterrichtet worden. Das Schulwesen der Gemeine stand zu dieser Zeit nicht mehr unter der Aufsicht des Staates. Die Lehrer hatten die Freiheit ihre eigenen Lehrpläne und Methoden im Unterricht zu nutzen.</span></p>
                            <a class="read-more" onclick="readmore('dots2', 'more2', 'myBtn2')" id="myBtn2" style="cursor:pointer">Mehr anzeigen</a>
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
                            <p>1845 gründete Pfarrer Tietzen die Pensions – Knabenanstalt im Brüderhaus. Anfang des Jahres zählte diese nur sieben Kinder, nach Ende des Jahres bereits zwölf. Die Schüler konnten nun erstmals in der Pension der Schule wohnen. Für Schüler außerhalb Neudietendorfs war das besonders praktisch.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                        <div class="date">
                                <p>1850</p>
                            </div>
                            <h2 class="news-title">Gründung der Mädchenanstalt</h2>
                            <p>Am 2. September 1850 wurde dann die Mädchenanstalt im Schwesternhaus gegründet. Diese bestand anfangs aus einer Lehrerin und 5 Schülerinnen und wurde daraufhin mit der ansässigen Ortsmädchenschule verbunden. Die Nachricht von einem Mädcheninternat verbreitete sich schnell in den Dörfern. Wer etwas auf die Bildung und Erziehung seiner Kinder hielt schickte sie in „Die Anstalt“, wie sie umgangssprachlich bezeichnet wurde. Die Schule erfreute sich schon bald so großer Beliebtheit, dass wegen Mangel an Räumlichkeiten etliche Anmeldungen zurückgewiesen werden mussten. 1857 erwarb die Gemeine das Grundstück für das neue Mädcheninstitut, der Bau begann noch im selben Jahr. 1860 lernten bereits 100 Schülerinnen in der Mädchenanstalt. Um allen genügenden Platz bieten zu können, hoffte man auf eine schnelle Beendigung des Baus.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1861</p>
                            </div>
                            <h2 class="news-title">Der Neubau</h2>
                            <p>Nach elfjährigem Aufenthalt im Schwestern- und Brüderhaus, zog die Schule am 16. Oktober 1861 in das neue Schulgebäude der höheren Mädchenschule, später auch Lyzeum genannt, ein. Auch die Knabenschule wurde dort noch einige Jahre mit untergebracht. Das Lyzeum bot Platz für bis zu 80 Schülerinnen in der Pension und noch einmal bis zu 60 weitere Schülerinnen aus der Umgebung Neudietendorfs. Der gute Ruf der Schule war indes deutschlandweit bekannt und sorgte für eine durchgehend, starke Frequentierung. Selbst bekannte Adelsgeschlechter vertrauten ihre Kinder den Lehrern der Mädchen - und Knabenschule an. Dieser Neubau stellt bis heute das Grundgebäude unserer Schule dar.</p>
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
                            <p>Das Erdmuth-Dorotheen Haus, wurde im Jahre 1920 gegründet und gilt als direkter Nachfolger der bis dato bestehenden Schule. Hierbei handelt es sich um ein elitäres, privates Mädcheninternat der evangelischen Brüdergemeine.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1923</p>
                            </div>
                            <h2 class="news-title">Erlangen der Prüfungsreife</h2>
                            <p>Ab 1923 war es in Neudietendorf möglich eine staatlich anerkannte Prüfung abzulegen. Anfangs nur unter Aufsicht eines Regierungskommisars, welcher zumeist aus Arnstadt oder Gotha angereist war. Aber nur wenige Jahre später war die Neudietendorfer Schule komplett eigenständig.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1933/1934</p>
                            </div>
                            <h2 class="news-title">Der Umbau</h2>
                            <p>Aufgrund ansteigender Beliebtheit der Internatsschule musste das 1861 erbaute Gebäude vergrößert werden. Dies geschah im Zeitraum zwischen 1933 und 1934. Mit Ausnahme von einigen Innenraumveränderungen entspricht das damals entstandene Gebäude komplett dem heutigen.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1944</p>
                            </div>
                            <h2 class="news-title">Die Verstaatlichung</h2>
                            <p>Unter enormen Druck der Nationalsozialisten im Jahre 1944 wurde die Schule trotz großem Kampf Seitens der Schüler sowie Lehrer Zwangsverstaatlicht. Nach Ende des zweiten Weltkrieges kam es zur Schließung des einstigen Erdmuth-Dorotheen-Hauses, und somit zum Neuanfang …</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1945</p>
                            </div>
                            <h2 class="news-title">Erlangen der Prüfungsreife</h2>
                            <p>Über die Zeit kurz vor- bzw. nach Kriegsende ist nur wenig bekannt. Im Herbst 1944 übernahmen die Nazis die Schule, verloren diese allerdings bereits ein Jahr später. Die amerikanischen Truppen besetzten das Gebäude, alle Schülerinnen wurden nach Hause geholt und der Schulbetrieb eingestellt.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1949</p>
                            </div>
                            <h2 class="news-title">Gründung der DDR</h2>
                            <p>Mit der Gründung der DDR wurden die Schulkonzepte verändert. Somit wurde unser Gymnasium zur EOS für das „Erfurter-Land“. Die EOS war damals ein elitäres Internat, in welchem Schüler von der neunten bis zwölften Klasse in Fächern wie Deutsch, Mathematik, oder auch Staatsbürgerkunde und Russisch unterrichtet wurden. Das Leben spielte sich damals größtenteils im Internat selber ab. Dadurch kam ein recht familiäres Verhältnis zwischen Schülern und auch Lehrern Zustande. Die Internatsräume für die Mädchen befanden sich im obersten Stockwerk der Schule, während die Jungen im oberen Stockwerk des ehemaligen Gasthofs „Drei Rosen“ der Brüdergemeine untergebracht waren.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1970er</p>
                            </div>
                            <h2 class="news-title">Modernisierung</h2>
                            <p>In den 1970er Jahren gab es an der EOS große Veränderungen. Zum Beispiel wurde die ehemalige Motorsportgruppe, in welcher Schüler mit einem Lehrer namens Herr Kahl, Enduro und Motocross-Rennen gefahren sind, aufgelöst. Zudem wurde Ende der 1970er Jahre auch die Zentralheizung für die unteren Stockwerke verbaut.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1989 - 1994</p>
                            </div>
                            <h2 class="news-title">Die Wende und ihre Folgen</h2>
                            <p>Nach der Wende 1989 wurde das Internat als solches nicht direkt aufgelöst, sondern erst im Jahre 1991 offiziell als Gymnasium genutzt. Jedoch bestanden von 1991 bis zum Jahre 1994 noch Schlafräume im ehemaligen Gasthof „Drei Rosen“. In diesen wurden die Mädchen und Jungen der letzten Jahrgänge der EOS untergebracht, welche sozusagen die letzten Überbleibsel der Zeit der Erweiterten Oberschule waren. Als 1994 der letzte Jahrgang das Internat verließ, wurde auch das Internat offiziell geschlossen.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1991</p>
                            </div>
                            <h2 class="news-title">Der Umbruch vom EOS auf das Gymnasium</h2>
                            <p>Nach der deutschen Wiedervereinigung 1990 wurde das westdeutsche Bildungssystem auf die neuen Länder übertragen. Bei der Erweiterten Oberschule in Neudietendorf geschah dieser Umbruch zu Beginn des Schuljahres 1991/92. Die Bildungseinrichtung war von nun an kein Internat mehr und trug zunächst den Namen Staatliches Gymnasium Neudietendorf.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>1991 - 1995</p>
                            </div>
                            <h2 class="news-title">Renovierung und Sanierung</h2>
                            <p>Durch die stark erhöhte Anzahl von Schülern, welche die Schule seit dem Umbruch aufgenommen hat, mussten die räumlichen Bedingungen der Schule verbessert werden. Unter anderem wurde der Großteil der Treppen verbreitert, Fußböden erneuert, Wände neu tapeziert und mit neuen Stühlen, Tischen und Tafeln wurden bessere Bildungsmöglichkeiten für die Schüler geschaffen. Außerdem wurde viel Wert auf die Modernisierung des Computerraumes und der Physik- und Chemielabore gelegt.</p>
                            <a class="read-more" href="#">Mehr anzeigen</a>
                        </div>
                    </div>
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>1997</p>
                            </div>
                            <h2 class="news-title">Umbenennung zum von-Bülow-Gymnasium</h2>
                            <p>Anfangs wurde seitens der Schulleitung nur darüber nachgedacht die Schule in „Comenius-“ oder „Goethe-Gymnasium“ umzubenennen. Da diese Namen nur einen sehr kleinen historischen Bezug zur Schule gehabt hätten, setzte sich der damalige „Heimat- und Geschichtsverein Neudietendorf e.V.“ und das Heimatmuseum Ingersleben dafür ein die Schule nach den Bülow-Schwestern zu benennen. Am 20. Juni 1997 erhielt das Gymnasium offiziell den Namen „von-Bülow-Gymnasium“.</p>
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


function readmore(dots, moreText, btnText) {
  var dots = document.getElementById(dots);
  var moreText = document.getElementById(moreText);
  var btnText = document.getElementById(btnText);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Mehr anzeigen";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Weniger anzeigen";
    moreText.style.display = "inline";
  }
}
</script>
@endsection
