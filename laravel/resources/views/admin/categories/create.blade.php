@extends('layouts.admin')


@section('content')


     
@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-md-12">
                      {{-- Create Form Brand--}}
               {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
               <div class="form-group">
                   {{ Form::label('name', 'Name') }}
                   {{ Form::text('name', NULL, array('class' => 'form-control' , 'required' )) }}
               </div>
               
               {{ Form::submit('Add Category', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}


            {!! Form::close() !!}
            </div>

@endsection
