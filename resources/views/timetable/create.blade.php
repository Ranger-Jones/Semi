

@extends('layouts.app')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <div class="container">    
        <div class="row" id="cards">
            <form method="post" id="t_create">
                <div class="col-12">
                    <div class="tile">
                        <div class="wrapper">
                            <div class="header">Event Title</div>

                            <div class="d-flex justify-content-center">
                                <div class="form-group pr-5">
                                    <label for="topic" class="col-md-8 col-form-label">Klasse</label>
                                    <select class="form-control @error('classe') is-invalid @enderror" 
                                            id="classe" 
                                            type="text" 
                                            name="classe">
                                        @foreach($grades as $g)
                                            <option>{{$g->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="topic" class="col-md-8 col-form-label">Tag</label>
                                    <select class="form-control @error('day') is-invalid @enderror" 
                                            id="day" 
                                            type="text" 
                                            name="day">
                                        @foreach($days as $d)
                                            <option>{{$d}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-success" id="addD">Erstelle Zeitabschnitte</a>
                            </div>
                            <div class="stats" id="stats">
                                <table class="table table-bordered table-striped" id="user_table">
                                    <thead>
                                        <tr>
                                            <th width="30%">Fach</th>
                                            <th width="20%">Tag</th>
                                            <th width="10%">Stunde</th>
                                            <th width="25%">Beschreibung</th>
                                            <!--<th width="35%">Bild(optional)</th>-->
                                            <th width="10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">
                                                <input type="submit" name="save" id="save" class="btn btn-success" value="Speichern" />
                                            </td>                  
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="footer">
                                <a href="#" class="Cbtn Cbtn-primary">View</a>
                                <a href="#" class="Cbtn Cbtn-danger" id="addD">Delete</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
    </div>



<script>
$(document).ready(function(){

 var count = 1 ;
 var preGen = '';
 var countD = 0;


 //poll_field(count);

 function poll_field(number, counter = 0)
 {
        if(counter != 0){
            day = $('#day :selected').text();
            html = '<tr>';
            html += '<td><select class="form-control" name="subject[]">@foreach($subjects as $s) @if($s->classe == 'classe')<option>{{$s->name}} - {{$s->teacher}}</option>@endif @endforeach</select></td>';        
            html += '<td><select class="form-control" name="day[]"><option>' + classe + '</option></select></td>';
            html += '<td><select class="form-control" name="hour[]"><option>' + counter + '</option></select></td>';
            html += '<td><input type="text" id="description" name="description[]" value class="form-control"/></td>';
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Entfernen</button></td></tr>';
            $('tbody').append(html);
        }
        else{
            day = $('#day :selected').text();
            html = '<tr>';
            html += '<td><select class="form-control" name="subject[]">@foreach($subjects as $s)<option>{{$s->name}} - {{$s->teacher}}</option>@endforeach</select></td>';        
            html += '<td><select class="form-control" name="day[]"><option>' + day + '</option></select></td>';
            html += '<td><select class="form-control" name="hour[]">@foreach($hours as $h)<option>{{$h}}</option>@endforeach</select></td>';
            html += '<td><input type="text" id="description" name="description[]" value class="form-control"/></td>';
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Entfernen</button></td></tr>';
            $('tbody').append(html);
        }

 }

 function new_day(number){
     html = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><div class="tile"><div class="wrapper"><div class="header">Event Title</div><div class="banner-img"><img src="http://via.placeholder.com/640x360" alt="Image 1"></div><div class="dates"><div class="start"><strong>STARTS</strong> 12:30 JAN 2015<span></span></div><div class="ends"><strong>ENDS</strong> 14:30 JAN 2015</div></div><div class="stats"></div><div class="footer"><a href="#" class="Cbtn Cbtn-primary">View</a><a href="#" class="Cbtn Cbtn-danger">Delete</a></div></div></div></div>';
     $('#cards').append(html);
 }


 $(document).on('click', '#add', function(){
  count++;
  poll_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#stats').hide();
 $(document).on('click', '#addD', function(){
    $('#stats').show();
    for(var i = 1; i < 7; i++){
        count++;
        poll_field(count, i);
    }
 })

 $('#t_create').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'/t/store',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    poll_field(0);
                    window.location.href = '/t';
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});

</script>

@endsection