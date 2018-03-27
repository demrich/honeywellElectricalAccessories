@if(count($errors))
  <div class="form-group">
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</div>
</div>
 @endif
 @if (Session::has('message'))
   <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get('message') }}
  </div>
@endif
 @if (Session::has('error'))
   <div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get('error') }}
  </div>
@endif