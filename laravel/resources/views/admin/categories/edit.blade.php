
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

<div class="row">
{!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'POST']) !!}


<div class="col-md-8">
    
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', NULL, array('class' => 'form-control' , 'required')) }}
    </div>
   
    
    
    
    
</div>
<div class="col-md-4">
    <div class="well">
        <dl class="dl-horizontal">
            <dt>Create At:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($category->created_at))}}</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Update At:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($category->updated_at))}}</dd>
        </dl>
    </div>
</div>
</div>
<br><br>
<div class="row">
<div class="col-md-6">
    {{ Html::linkroute('category', 'Cancel', NULL, array('class' => 'btn btn-danger')) }}
</div>

<div class="col-md-6">
    {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
</div>

</div>
{!! Form::close() !!}

endsection