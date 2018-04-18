@extends("user.app")
@section('title', 'Shop')
@section('meta', 'Use Google Assistant And Amazon Alexa To Control And Schedule Honeywell Smart Controls. Set Customized Scenes for Day or Night, Home or Away with Honeywell Smart Home Devices. Schedule what you want, when you want it. Set lighting and other devices to turn on, turn off, or dim at certain times of the day with Honeywell Smart Home Z-Wave Plus Controls.')
@section("content")
<div class="animated fadeIn" id="shop">
@if(count($categories))
@foreach($categories as $categorie)
<div class="container-fluid">
<center><h1 id="category-{{$categorie->id}}"}>{{$categorie->name}}</h1></center>
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