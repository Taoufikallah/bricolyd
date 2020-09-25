@extends('layouts.profile')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action ">Dashboard</a>
              <a href="adverts" class="list-group-item list-group-item-action active">Adverts</a>
              <a href="#" class="list-group-item list-group-item-action">Media</a>
              <a href="#" class="list-group-item list-group-item-action">Category</a>
              <a href="#" class="list-group-item list-group-item-action">Comments</a>
              <a href="#" class="list-group-item list-group-item-action">Settings</a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Advert</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                           {!! Form::open(['action' => 'AdvertsController@store' , 'method' => 'ADVERT']) !!}
                            <div class="form-group">
                                {{Form::label('description' , 'Description')}}
                                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder'=> 'Description'])}}
                            </div>
                            
                            {{Form::submit('Submit' , ['class'=>'btn btn-primary'])}}
                           {!! Form::close() !!}
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection
