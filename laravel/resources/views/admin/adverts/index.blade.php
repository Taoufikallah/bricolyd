@extends('layouts.admin')


@section('content')


<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Responsive Hover Table</h3>
      <th class="text-center" width="130px"><a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Create</a></th>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Description</th>
            <th>City</th>
            <th>Category</th>
            <th>User</th>
            <th>Create At</th>
            <th>Actions</th>

          </tr>
        </thead>
        <tbody>
          <tr>
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
                        <td>{{$value->user_id}}</td>
                        {{-- <td>
                        @if($value->user_id !== null)         
                          {{  $value->user_id->name }}
                          @endif
                        </td> --}}
                        <td>{{ date(' M j Y', strtotime($value->created_at)) }}</td>
                        <td>{!! Form::open(['method' => 'POST', 'route' => ['advert.delete',$value->id], 'style' => 'display:inline' ]) !!}
                            {!! Form::button('', ['type' => 'submit', 'i class' => 'btn btn-danger btn-sm glyphicon glyphicon-trash ']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
            @endforeach
          </tr>
         
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>





@endsection
