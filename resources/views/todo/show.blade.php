@extends('layouts.app')

@section('content')

  <div class="row">

    <div class="col-md-8 col-md-offset-2">

      <div class="panel panel-default">

        <div class="panel-heading">
          <h3 class="panel-title">
            {{ $todo->title }}
          </h3>
        </div>

        <div class="panel-body">

          <label class="col-sm-2">Done:</label>
          <div class="col-sm-10">
            <p class="{{ $todo->done ? 'text-success' : 'text-warning' }}">{{ $todo->done ? 'Yes' : 'No' }}</p>
          </div>
          <label class="col-sm-2">Created:</label>
          <div class="col-sm-10">
            <p>{{ $todo->created_at }}</p>
          </div>
          <label class="col-sm-2">Finished:</label>
          <div class="col-sm-10">
            <p>{{ $todo->updated_at }}</p>
          </div>
        </div>

      </div>

      <form action="{{ $todo->id }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger">DELETE</button>
      </form>

    </div>

  </div>
  
@endsection