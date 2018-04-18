@extends("user.app")
@section('title', 'Search Results')

@section("content")
<div class="container-fluid">
@if(count($products))
@foreach($products as $product)
@include("user.partials.productBoxShop")
@endforeach
@else
<center><h1>0 Products Found</h1></center>
@endif
</div>
@endsection