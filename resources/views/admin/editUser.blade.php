@extends('admin.app')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            Edit User
        </div>
        <div class="panel-body">
  <form action="/user/update" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" value="{{$user->name}}"name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{$user->email}}" name="email" required readonly>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>
    <div class="form-group">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password Again">
  </div>
  <input type="hidden" name="type" value="admin">
    @include("errors")
    <button type="submit" class="btn btn-info pull-right">Save Changes</button>
  </form>
      <a href="/user/destroy/{{$user->email}}">
    <button class="btn btn-danger">Delete User</button>
    </a>
        </div>
    </div>
@endsection