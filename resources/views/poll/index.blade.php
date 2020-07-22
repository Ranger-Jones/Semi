@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div class="container">    
    <div class="d-block">
      <h3 align="center">Umfrage</h3>
      <p align="center" class="text-italic text-weight-lower">Hier können Sie zu Ihrem Post eine Umfrage hinzufügen, der von Ihnen erstellte Post hat die Überschrift:{{$post->caption}}</p>
    </div>
     
   <div class="table-responsive">
                <form method="post" id="poll">
                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th width="35%">Antwortmöglichkeiten</th>
                    <!--<th width="35%">Bild(optional)</th>-->
                    <th width="30%"></th>
                </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                <tr>
                    <td colspan="1">
                        <input type="text" value="{{$post->caption}}" name="postcaption" id="postcaption" readonly class="form-control">
                    </td>
                  <td>
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
        html += '<td><input type="text" name="text[]" class="form-control" /></td>';
        /*html += '<td><input type="text" name="image[]" class="form-control" disabled/></td>';*/
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

 $('#poll').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'/poll/insert/{{$post->code}}',
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