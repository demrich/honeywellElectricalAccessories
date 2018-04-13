@extends('admin.app')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <span>Add Categorie</span>
        </div>
        <div class="panel-body">
  <form action="/categorie/store" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name*:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    @include("errors")
    <button type="submit" class="btn btn-default pull-right">Submit</button>
  </form>
        </div>
    </div>
@endsection