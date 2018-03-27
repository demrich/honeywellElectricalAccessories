@extends('admin.app')
@section('content')
    <div class="panel panel-warning">
      <div class="panel-heading">Users</div>
      <div class="panel-body">
            @include("errors")
      @if(count($users))
        <table class="table">
    <thead>
      <tr>
        <th><center>Name</center></th>
        <th><center>E-Mail</center></th>
        <th><center>Type</center></th>
        <th><center>Edit</center></th>
      </tr>
    </thead>
    <tbody>  
        @foreach($users as $user)  
    <tr class="active">
        <th><center>{{$user->name}}</center></th>
        <th><center>{{$user->email}}</center></center></th>
        <th><center>{{$user->type}}</center></center></th>
        <th><center><a href="/user/edit/{{$user->email}}" class="btn btn-info">Edit</a></center></th>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <center><h1>0 Users Found</h1></center>
  @endif
    </div>
    </div>
    </div>
@endsection