@extends('layouts.app')

@section('content')
<script src="jquery/1.9.1/jquery.js"></script>
<div class="container">
    <div class="row">
        <div class="col-12">
                <h3 class="well">Lade deinen News Artikel hoch</h3>
                <form method="post" action="/schulnews/store" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="caption" class="col-md-4 col-form-label ">Überschrift des Artikels</label>
                            <input id="caption" 
                                type="text" 
                                name="caption"
                                class="form-control @error('caption') is-invalid @enderror" 
                                value="{{ old('caption') }}" 
                                required autocomplete="caption" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="topic">Welches Themengebiet?</label>
                        <select class="form-control" id="topic" name='topic'>
                        <option>Alle Schüler</option>
                        <option>Oberstufe</option>
                        <option>Bis 10. Klasse</option>
                        <option>Mathemathik & NwuT</option>
                        <option>Gesellschaftswissenschaftliche</option>
                        <option>Sprache, Literatur, Kunst</option>
                        <option>Anderes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Trage hier deinen Artikelinhalt ein!</label>
                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>
                    <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="filenames[]" class="myfrm form-control">
                        <div class="input-group-btn"> 
                            <button class="btn btn-success scc" type="button"><i class="fldemo fa fa-plus"></i>Add</button>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>


                </form>       
        </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $(".scc").click(function(){ 
        var lsthmt1 = '<div class="clone hide"><div class="hdtuto control-group lst input-group" style="margin-top:10px"><input type="file" name="filenames[]" class="myfrm form-control"><div class="input-group-btn"> <button class="btn btn-danger" type="button"><i class="fldemo fa fa-remove"></i> Remove</button></div></div></div>'
        $(".increment").after(lsthmt1);
    });
    $("body").on("click",".btn-danger",function(){ 
        $(this).closest('.hdtuto').remove();
    });
});
</script>

@endsection