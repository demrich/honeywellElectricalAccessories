<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body row productModel">
  <div class="col-sm-4">
    <img src="productImages/{{$product->thumbnail}}" class="thumbnail">
  </div>
  <div class="col-sm-8">
    <h1 class="name">{{$product->name}}</h1>
    @if($product->saleStatus)
    <div class="salePriceBox">
      <span class="price">${{$product->price}}</span>
      <span class="salePrice">${{$product->saleStatus}}</span>
    </div>
    @else
     <div class="regularPriceBox">
      <span class="price">${{$product->price}}</span>
    </div>
    @endif
    <button class="btn addToCart">Add to Cart</button>
    <p class="description">
      {{$product->description}}
    </p>
  </div>
</div>