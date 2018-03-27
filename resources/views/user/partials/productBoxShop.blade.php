  <div class="product-box">
  <img src="productImages/{{$product->thumbnail}}">
  <span class="product-name">{{$product->name}}</span>
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
  <div class="buttonGrid">
  	<button class="btn btn-product-btn"><i class="material-icons">&#xE8CB;</i></button>
    <button class="btn btn-product-btn" onClick="openModel('{{$product->productId}}')" data-toggle="modal" data-target="#quickViewModel"><i class="material-icons">&#xE8FF;</i></button>
  </div>

</div>