  <div class="product-box">
  <a href="{{$product->url}}" target="_blank">
  <img src="productImages/{{$product->thumbnail}}">
  </a>
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
  	<button class="btn btn-product-btn add-to-cart" onClick="addCart('https://byjasco.com/products/{{$product->sku}}/add-to-cart', this)" ><i class="material-icons">&#xE8CB;</i></button>
    <button class="btn btn-product-btn" onClick="openModel('{{$product->productId}}')" data-toggle="modal" data-target="#quickViewModel"><i class="material-icons">&#xE8FF;</i></button>
  </div>

</div>