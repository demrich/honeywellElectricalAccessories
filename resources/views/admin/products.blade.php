@extends('admin.app')

@section('content')
    <div class="panel panel-warning">
      <div class="panel-heading">Products</div>
      <div class="panel-body">
  @include("errors")
          <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#All">All</a></li>
    <li><a data-toggle="tab" href="#Search">Search</a></li>
  </ul>

  <div class="tab-content">
    <div id="All" class="tab-pane fade in active">
      
      @if(count($products))
  <div class="alert alert-info alert-dismissable fade in" id="responseAlert" style="display:none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><p id="responseResponse"></p></strong> <p id="responseMessage"></p>
  </div>
<button class="btn btn-warning pull-right" onclick="update()">Save Positions</button>
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
        <th><center>Move</center></th>
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
        <th>
        <button type="button"  class="move up btn btn-warning btn-block" ><center><span class="glyphicon glyphicon-chevron-up"></span></center></button>
        <button type="button"  class="move down btn btn-warning btn-block"><center><span class="glyphicon glyphicon-chevron-down"></span></center></button>
      </th>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <center><h1>0 Products Found</h1></center>
  @endif
    </div>

    <div id="Search" class="tab-pane fade">


  <div class="panel panel-default">
   <div class="panel-body">
    <div class="form-group">
        <label for="searchFor">Search Product:</label>
        <input type="text" class="form-control" id="searchFor">
      </div>
      <div class="form-group">
        <label for="searchWith">With:</label>
      <select class="form-control" id="searchWith">
        <option value="name">Product Name</option>
        <option value="productId">Product Id</option>
      </select>
      </div>
    <div class="form-group">
  <button class="btn btn-info pull-right" onclick="searchProduct()">Search</button>
    </div>
      </div>
</div>
<div id="searchResult">

</div>
</div>
    </div>
  </div>
      </div>
    </div>
    <script>
$('#productsTable button.move').click(function() {
    var row = $(this).closest('tr');
    if ($(this).hasClass('up')){
        row.prev().before(row);
    }else{
        row.next().after(row);

    }});
function getRowInfo(){
  var resultArray = [];
$('#productsTable .productId').each(function(){
var id = $(this).html();
  resultArray.push(id); 
});
return resultArray;
}
function update(){
   $.ajax({
        url: "/products/updatePosition", 
        type:"POST",
        data:{
           "_token": "{{ csrf_token() }}",
          positionData:getRowInfo()
        },
        async: false, 
        success: function(result){
            $("#responseResponse").text("Success!");
            $("#responseMessage").text(result.message);
            $("#responseAlert").show();
           }
        });
}
function searchProduct(){
     $.ajax({
        url: "/products/searchProduct", 
        type:"POST",
        data:{
           "_token": "{{ csrf_token() }}",
          searchFor:$("#searchFor").val(),
          searchWith:$("#searchWith").val()
        },
        async: false, 
        success: function(result){
            $("#searchResult").html(result);
        }});
}
    </script>
@endsection