@extends('admin.app')

@section('content')
    <div class="panel panel-warning">
      <div class="panel-heading">Categories</div>
      <div class="panel-body">
  @include("errors")

  <div class="tab-content">
    <div id="All" class="tab-pane fade in active">
      
      @if(count($categories))
  <div class="alert alert-info alert-dismissable fade in" id="responseAlert" style="display:none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><p id="responseResponse"></p></strong> <p id="responseMessage"></p>
  </div>
<button class="btn btn-warning pull-right" onclick="update()">Save Positions</button>
        <table class="table">
    <thead>
      <tr>
        <th><center>Id</center></th>
        <th><center>Name</center></th>
        <th><center>Edit</center></th>
        <th><center>Move</center></th>
      </tr>
    </thead>
    <tbody id="categoriesTable">  
        @foreach($categories as $categorie)  
        <th><center><p class="categorieId">{{$categorie->categorieId}}</p></center></th>
        <th><center>{{$categorie->name}}</center></center></th>
        <th><center><a href="/categorie/edit/{{$categorie->categorieId}}" class="btn btn-info">Edit</a></center></th>
        <th>
        <button type="button"  class="move up btn btn-warning btn-block" ><center><span class="glyphicon glyphicon-chevron-up"></span></center></button>
        <button type="button"  class="move down btn btn-warning btn-block"><center><span class="glyphicon glyphicon-chevron-down"></span></center></button>
      </th>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <center><h1>0 Categories Found</h1></center>
  @endif
    </div>
    </div>
  </div>
      </div>
    </div>
    <script>
$('#categoriesTable button.move').click(function() {
    var row = $(this).closest('tr');
    if ($(this).hasClass('up')){
        row.prev().before(row);
    }else{
        row.next().after(row);

    }});
function getRowInfo(){
  var resultArray = [];
$('#categoriesTable .categorieId').each(function(){
var id = $(this).html();
  resultArray.push(id); 
});
return resultArray;
}
function update(){
   $.ajax({
        url: "/categories/updatePosition", 
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
    </script>
@endsection