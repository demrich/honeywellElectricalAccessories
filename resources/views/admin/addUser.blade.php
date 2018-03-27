@extends('admin.app')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <span>Add User</span>
        </div>
        <div class="panel-body">
  <form action="/user/store" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter E-Mail" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
    </div>
    <div class="form-group">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password Again" required>
  </div>
  <input type="hidden" name="type" value="admin">
    @include("errors")
    <button type="submit" class="btn btn-default pull-right">Submit</button>
  </form>
        </div>
    </div>
@endsection