@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <form action="/todo" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="title">Todo Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
          </div>  
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <br>

    <div clas="col-md-8 col-md-offset-2">
      @include ('layouts.errors')
    </div>

</div>

@endsection