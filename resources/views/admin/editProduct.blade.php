@extends('admin.app')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <span>Edit Product</span>
        </div>
        <div class="panel-body">
  <form action="/product/update" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
     <div class="form-group">
      <label for="productId">Product Id:</label>
      <input type="text" class="form-control" id="productId" value="{{$product->productId}}" name="productId" required readonly>
    </div>   
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" value="{{$product->name}}" name="name" required>
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" rows="5" name="description" reqired></textarea>
    </div>
    <div class="form-group">
      <label for="priced">Price:</label>
      <input type="text" class="form-control" id="price" value="{{$product->price}}" placeholder="Enter Price" name="price" required>
    </div>
<div class="checkbox">
  @if($product->saleStatus)
  <label><input type="checkbox" name="saleStatus" value="1" checked>On Sale</label>
  @else
  <label><input type="checkbox" name="saleStatus" value="1">On Sale</label>
  @endif
</div>
    <div class="form-group">
      <label for="salePrice">Sale Price:</label>
      <input type="text" class="form-control" id="salePrice" value="{{$product->salePrice}}" placeholder="Enter Sale Price" name="salePrice">
    </div>
 <div class="form-group">
  <label for="categoryId">Category:</label>
  <select class="form-control" id="categoryId" name="categoryId">
    @if(count($selectedCategory))
    <option value='{{$selectedCategory->categorieId}}'>{{$selectedCategory->name}}</option>
    @else
    <option value='null'>Not Set</option>
    @endif
    <option disabled>----------</option>
    @foreach($categories as $categorie)
    @if(count($selectedCategory))
    @if($categorie->categorieId != $selectedCategory->categorieId)
    <option value='{{$categorie->categorieId}}'>{{$categorie->name}}</option>
    @endif
    @else
    <option value='{{$categorie->categorieId}}'>{{$categorie->name}}</option>
    @endif
    @endforeach
  </select>
</div>
    <div class="checkbox">
  @if($product->active)
  <label><input type="checkbox" name="active" value="1" checked>Active</label>
  @else
  <label><input type="checkbox" name="active" value="1">Active</label>
  @endif
</div>
  <div class="form-group">
  <label for="thumbnail">Thumbnail:</label>
  <input type="file" id="thumbnail" name="thumbnail">
  </div>
  <div class="form-group">
      <label for="images">Product Image:</label>
  <input type="file" id="images" name="images[]" multiple>
  </div>  
  @include("errors")
  <a href="/product/destroy/{{$product->productId}}" class="btn btn-danger">Delete</a>
  <button type="submit" class="btn btn-warning pull-right">Update</button>
  </form>
        </div>
    </div>
    <script>
$("#description").text("{{$product->description}}");
    </script>
@endsection