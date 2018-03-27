@extends('admin.app')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <span>Add Product</span>
        </div>
        <div class="panel-body">
  <form action="/product/store" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" rows="5" name="description" reuired></textarea>
    </div>
    <div class="form-group">
      <label for="priced">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" required>
    </div>
<div class="checkbox">
  <label><input type="checkbox" name="saleStatus" value="1">On Sale</label>
</div>
    <div class="form-group">
      <label for="salePrice">Sale Price:</label>
      <input type="text" class="form-control" id="salePrice" placeholder="Enter Sale Price" name="salePrice">
    </div>
    <div class="form-group">
  <label for="categoryId">Category:</label>
  <select class="form-control" id="categoryId" name="categoryId">
        @foreach($categories as $categorie)
    <option value='{{$categorie->categorieId}}'>{{$categorie->name}}</option>
    @endforeach
  </select>
</div>
    <div class="checkbox">
  <label><input type="checkbox" name="active" value="1">Active</label>
</div>
  <div class="form-group">
  <label for="thumbnail">Thumbnail:</label>
  <input type="file" id="thumbnail" name="thumbnail" required>
  </div>
  <div class="form-group">
      <label for="images">Product Image:</label>
  <input type="file" id="images" name="images[]" multiple>
  </div>  
  @include("errors")
  <button type="submit" class="btn btn-default pull-right">Submit</button>
  </form>
        </div>
    </div>
@endsection