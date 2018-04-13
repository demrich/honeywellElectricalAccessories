      @if(count($products))
        <table class="table">
    <thead>
      <tr>
        <th><center>Id</center></th>
        <th><center>Thumbnail</center></th>
        <th><center>Name</center></th>
        <th><center>Price</center></th>
        <th><center><center>Sale Price</center></th>
        <th><center>Sale Status</center></th>
        <th><center>Edit</center></th>
      </tr>
    </thead>
    <tbody id="productsTable">  
        @foreach($products as $product)  
    @if($product->active)
    <tr class="active">
          @else
     <tr class="danger">
          @endif
        <th><center><p class="productId">{{$product->productId}}</p></center></th>
        <th style="width:20%"><center><img src="productImages/{{$product->thumbnail}}" style="width:35%"></center></th>
        <th><center>{{$product->name}}</center></center></th>
        <th><center>{{$product->price}}</center></th>
        <th><center>{{$product->salePrice}}</center></th>
        <th><center>
            @if($product->saleStatus)
            On Sale
            @else
            Not On Sale
            @endif
            </center></th>
        <th><center><a href="/product/edit/{{$product->productId}}" class="btn btn-info">Edit</a></center></th>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <center><h1>0 Products Found</h1></center>
  @endif