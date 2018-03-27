@extends("user.app")
@section("content")
<div class="container-fluid">
@if(count($categories))
@foreach($categories as $categorie)
<div class="container-fluid">
<center><h1>{{$categorie->name}}</h1></center>
<?php $products = App\Http\Controllers\ProductsController::getFromCategory($categorie->categorieId);?>
@if(count($products))
@foreach($products as $product)
@include("user.partials.productBoxShop")
@endforeach
@endif
</div>
@endforeach
@else
<center><h1>0 Categories Found</h1></center>
@endif
</div>
@endsection