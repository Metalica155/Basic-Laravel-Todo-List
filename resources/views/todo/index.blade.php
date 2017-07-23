@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="todo/create">Create New Todo</a>
      </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todos</div>

                <div class="panel-body">
                    <div class="list-group">
                      @foreach ($todos as $todo)
                        <a href="todo/{{ $todo->id }}" class="list-group-item {{ $todo->done ? 'list-group-item-success' : '' }}">
                            {{ $todo->title }}
                            <form action="todo/{{ $todo->id }}" method="POST" class="form-horizontal">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="put">
                              <input type="hidden" name="done" value="1">
                              <button type="submit" class="btn btn-default btn-sm">Finish</button>
                            </form>
                        </a>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection