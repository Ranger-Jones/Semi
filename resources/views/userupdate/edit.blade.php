@extends('layouts.start')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <div class="">
                    <h2>Bevor du mit der Benutzung der Website fortfahren kannst, musst du deine Fächer auswählen.</h2>
                    <h5>Du befindest dich zur Zeit in der Klasse {{$user->inclass}}</h5><span><p>Falls das nicht stimmt wende dich an einen Admin.</p></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

    <form action="/me/{{Auth::user()->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        
        <div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Fächer auswählen</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Fach</th>
								<th>Lehrer</th>
								<th class="td-actions"></th>
							</tr>
						</thead>
						<tbody>
                            @foreach($subjects as $s)
                                <tr>
                                    <td>{{$s->name}}</td>
                                    <td>{{$s->teacher}}</td>
                                    <td class="td-actions">
                                        <input type="checkbox" name="subject[{{$s->id}}]" id="checkbox3" checked/>
                                    </td>
                                </tr>
                            @endforeach
							
                            
							
							
							
							</tbody>
						</table>
				</div> <!-- /widget-content -->
            </div> <!-- /widget -->
            
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="container-fluid  margin">
                            <button  type="submit" class="themeBtn ripple-effect">Auswählen</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>

    </div>
</div>
   
    
        
</div>

@endsection