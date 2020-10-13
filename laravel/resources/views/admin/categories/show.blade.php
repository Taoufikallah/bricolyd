@extends('layouts.admin')


@section('content')


    <div class="col-md-8">
        <div class="form-group">
            <p class="lead">{{ $category->name }}</p>
        </div>

    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <label>Create At:</label>
                <p> {{ date('M j, Y h:ia', strtotime($category->created_at)) }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label>Update At:</label>
                <p> {{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</p>
            </dl>
        </div>
        
    </div>

@endsection
