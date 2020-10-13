@extends('layouts.profile')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="/home" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="/home/adverts/create" class="list-group-item list-group-item-action">Adverts</a>
              <a href="#" class="list-group-item list-group-item-action">Category</a>
              <a href="#" class="list-group-item list-group-item-action">Comments</a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <div class="card-body">
             
          </div>
          
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-4"><a href="/home/adverts/">Adverts</a></div>
                        
                        <div class="col-md-4">comment</div>
                        <div class="col-md-4">message</div>
                      </div>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection
