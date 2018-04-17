@extends("user.app")
@section("content")
<div class="animated fadeIn" id="shop">
@if(count($categories))
@foreach($categories as $categorie)
<div class="container-fluid">
<center><h1>{{$categorie->name}}</h1></center>
<?php $products = App\Http\Controllers\ProductsController::getFromCategory($categorie->categorieId);?>
@if(count($products))

@foreach($products->chunk(3) as $productChunk)
<div class="row">

@foreach($productChunk as $product)
<div class="col-md-4">
@include("user.partials.productBoxShop")
</div>
@endforeach
</div>
@endforeach

@endif
</div>
@endforeach
@else
<center><h1>0 Categories Found</h1></center>
@endif
</div>


@endsection