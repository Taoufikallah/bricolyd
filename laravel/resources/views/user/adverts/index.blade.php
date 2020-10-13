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
              <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
               <i class="nav-icon fas fa-power-off red"></i>
                <p>
                  {{ __('Logout') }}
                </p>
            </a>
              
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
                  <table class="table table-hover">
<div class="pull-right">
    <th class="text-center"><a href="{{ route('advert.create') }}" class="btn btn-primary btn-sm">Create</a></th>

</div>
                    <tr>
                      <th>ID</th>
                      <th>Description</th>
                      <th>City</th>
                      <th>Category</th>
                      <th>Create At</th>
                      <th>Actions</th>
                    </tr>
                    <?php $no=1 ?>
                            @foreach ($advert as $key => $value)
                            
                                <tr>
                                    <th>{{ $no++ }}</th>
                                  
                                    <td>{{ $value->description }}</td>
                                    <td>{{ $value->city }}</td>
                                    <td>{{ $value->category_id }}</td>
                                    {{-- <td>
                                    @if($value->category_id !== null)         
                                      {{  $value->category_id->name }}
                                      @endif
                                    </td> --}}
                                    
                                    <td>{{ date(' M j Y', strtotime($value->created_at)) }}</td>
                                    <td>{!! Form::open(['method' => 'POST', 'route' => ['advert.delete',$value->id], 'style' => 'display:inline' ]) !!}
                                        {!! Form::button('', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm glyphicon glyphicon-trash ']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    
                                </tr>
                        @endforeach
                      
                   
                  </table>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection
