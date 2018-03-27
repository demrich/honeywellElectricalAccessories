  <div class="product-box">
  <img src="productImages/{{$product->thumbnail}}">
  <span class="product-name">{{$product->name}}</span>
    <button class="btn btn-product-btn" onClick="openModel('{{$product->productId}}')" data-toggle="modal" data-target="#quickViewModel"><i class="material-icons">&#xE8FF;</i></button>
</div>