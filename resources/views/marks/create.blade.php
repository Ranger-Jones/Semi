@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div class="container">    
    <div class="d-block">
      <h3 align="center">Neue Noten</h3>
    </div>
     <hr>
     <p class="mb-0"><b>{{$error}}</b></p>
   <div class="table-responsive">
   
                <form method="post" id="m_create">
                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th width="20%">Schüler</th>
                    <th width="20%">Fach</th>
                    <th width="5%">Note</th>
                    <th width="25%">Beschreibung</th>
                    <th width="25%">Lehrer</th>
                    <!--<th width="35%">Bild(optional)</th>-->
                    <th width="30%"></th>
                </tr>
               </thead>
               <tbody>
                    @if($subject != '')
                        @php
                            $count = 0;
                        @endphp
                        @foreach($s_users as $u)
                            @php
                                $count++;
                            @endphp
                                <td><input type="text" name="name[]" readonly class="form-control"/ value="{{$u->name}}"></td>
                                <td><input type="text" name="subject[]" readonly class="form-control" value="{{$subject}}"/></td>
                                <td><input type="text" name="mark[]" class="form-control"/></td>
                                <td><input type="text" name="description[]" class="form-control"/></td>
                                <td><input type="text" name="teacher[]" readonly class="form-control" value="{{auth()->user()->name}}"/></td>
                                <td><button type="button" name="remove" id="" class="btn btn-danger remove">Entfernen</button></td></tr>  

                        @endforeach
                    @endif
               </tbody>
               <tfoot>
                <tr>
                    <td colspan="5">
                        <button type="button" name="add" id="add" class="btn btn-success">Hinzufügen</button></td>
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
 var preGen = '';

@if ($subject == '' || $class == '')
 poll_field(count);
@endif
 function poll_field(number)
 {
        html = '<tr>';
        html += '<td><select class="form-control" name="name[]">@foreach($usernames as $user)<option>{{$user}}</option>@endforeach</select></td>';        
        html += '<td><select class="form-control" name="subject[]">@foreach($subjects as $s)<option>{{$s}}</option>@endforeach</select></td>';
        html += '<td><input type="text" name="mark[]" class="form-control"/></td>';
        html += '<td><input type="text" id="description" name="description[]" value class="form-control"/></td>';
        html += '<td><input type="text" name="teacher[]" class="form-control" value="{{auth()->user()->name}}"/></td>';
        html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Entfernen</button></td></tr>';
            $('tbody').append(html);


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
                    window.location.href = '/m';
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});

</script>

@endsection