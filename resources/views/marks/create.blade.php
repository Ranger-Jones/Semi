@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div class="container">    
    <div class="d-block">
      <h3 align="center">Neue Noten</h3>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <button class="btn btn-success" name="allstudents">All Students</button>
            </div>
        </div>
    </div>
     <hr>
   <div class="table-responsive">
                <form method="post" id="m_create">
                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th width="20%">Schüler</th>
                    <th width="10%">Klasse</th>
                    <th width="20%">Fach</th>
                    <th width="5%">Note</th>
                    <th width="25%">Beschreibung</th>
                    <th width="25%">Lehrer</th>
                    <!--<th width="35%">Bild(optional)</th>-->
                    <th width="30%"></th>
                </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                <tr>
                    <td colspan="6">
                        <input type="text" value="" name="postcaption" id="postcaption" readonly class="form-control">
                    </td>                  <td>
                  @csrf
                  <input type="submit" name="save" id="save" class="btn btn-primary" value="Speichern" />
                 </td>
                </tr>
               </tfoot>
           </table>
                </form>
   </div>
  </div>



<script>
$(document).ready(function(){

 var count = 1;

 poll_field(count);

 function poll_field(number)
 {
  html = '<tr>';
        html += '<td><select class="form-control" name="name[]">@foreach($usernames as $user)<option>{{$user}}</option>@endforeach</select></td>';
        html += '<td><select class="form-control" name="inclass[]">@foreach($classes as $class)<option>{{$class}}</option>@endforeach</select></td>';
        html += '<td><select class="form-control" name="subject[]">@foreach($subjects as $subject)<option>{{$subject}}</option>@endforeach</select></td>';
        html += '<td><input type="text" name="mark[]" class="form-control"/></td>';
        html += '<td><input type="text" id="description" name="description[]" value class="form-control"/></td>';
        html += '<td><input type="text" name="teacher[]" class="form-control" value="{{auth()->user()->name}}"/></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Entfernen</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Hinzufügen</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  poll_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });


 $('#m_create').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'/m/insert',
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
                    poll_field(1);
                    window.location.href = '/profile/' + {{auth()->user()->id}};
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});

</script>
@endsection