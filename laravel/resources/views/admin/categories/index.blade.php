@extends('layouts.admin')


@section('content')


<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Responsive Hover Table</h3>

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
            <th>Name</th>
            <th>create at</th>
            <th class="text-center" width="130px"><a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Create</a></th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <?php $no=1 ?>
                @foreach ($category as $key => $value)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $value->name }}</td>
                        </td>
                        <td>{{ date(' M j Y', strtotime($value->created_at)) }}</td>
                        
                        <td>
                            <a href="{{ route('category.edit', $value->id) }}" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit "></i></a>
                             {!! Form::open(['method' => 'POST', 'route' => ['category.delete',$value->id], 'style' => 'display:inline' ]) !!}
                            {!! Form::button('', ['type' => 'submit', 'class' => 'btn btn-danger  fas fa-trash-alt ']) !!}
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
