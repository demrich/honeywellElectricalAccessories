@extends('admin.app')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <span>Edit Categorie</span>
        </div>
        <div class="panel-body">
  <form action="/categorie/update" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="categorieId" value="{{$categorie->categorieId}}" required>
    <div class="form-group">
      <label for="name">Name*:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$categorie->name}}" required>
    </div>
    @include("errors")
    <a href="/categorie/destroy/{{$categorie->categorieId}}">
    <button type="button" class="btn btn-danger">Delete</button>
    </a>
    <button type="submit" class="btn btn-default pull-right">Submit</button>
  </form>
        </div>
    </div>
@endsection