@extends("user.app")
@section("content")
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="Images/iStock_000068822847_Large.jpg" alt="Los Angeles">
        <center>
      <div class="carousel-text-box">
        <p class="txt-big">VOICE CONTROL</p>
        <p class="txt-small">USE GOOGLE ASSISTANT AND AMAZON ALEXA TO CONTROL<br>
AND SCHEDULE HONEYWELL SMART CONTROLS*</p>
      </div>
        <button class="btn btn-info custom-blue-btn carousel-btn">Learn More</button>
    </center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid">
<center><h1 class="main-heading">Browse Our Popular Products</h1></center>
<div class="slick-carousel shop-carousel">
@foreach($products as $product)
<div>
@include("user.partials.productBox")
</div>
@endforeach
</div>
<dir class="row">
  <div class="col-sm-12">
    <div class="info-box-content-areaes">
      <img src="Images/Scheduled-Time-photo.jpg">
      <div class="info-box-content-area">
      <h1>CUSTOMIZED SCENES FOR DAY OR NIGHT, HOME OR AWAY</h1>
      <p>Program groups of lights for entertaining, events, or certain times of day or night.</p>
    </div>
  </div>
  </div>
  <div class="col-sm-12">
    <div class="info-box-content-areaes">
      <img src="Images/Scheduled-Time-photo.jpg">
      <div class="info-box-content-area">
      <h1>SCHEDULE TIMED EVENTS FOR CONNECTED DEVICES</h1>
      <p>Schedule what you want, when you want it. Set lighting and other devices to turn on, turn off or dim at certain times of the day.</p>
     </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="info-box-content-areaes">
      <img src="Images/Scheduled-Time-photo.jpg">
      <div class="info-box-content-area">
      <h1>CONTROL WITH ONE TOUCH FROM ANYWHERE**</h1>
      <p>Whether home or away, you can control any of your smart devices from your smartphone, tablet or PC.</p>
    </div>
    </div>
  </div>
</dir>
</div>

@endsection