@extends("user.app")
@section("content")
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="{{ asset('Images/honeywell-hero.jpg') }}" alt="Los Angeles">
      <div class="carousel-text-box text-center">
        <h1 class="txt-big">VOICE CONTROL</h1>
        <p class="txt-small">USE GOOGLE ASSISTANT AND AMAZON ALEXA TO CONTROL<br>
AND SCHEDULE HONEYWELL SMART CONTROLS*</p>
      </div>
      <button class="btn btn-info custom-blue-btn carousel-btn">Learn More</button>
    </div>
    <div class="hero reveal">"Turn on the <br>nightstand light" </div>

  </div>

  <!-- Left and right controls -->
<center><h2 class="main-heading">Browse Our Popular Products</h2></center>
<div class="slick-carousel shop-carousel">
@foreach($products as $product)
<div>
@include("user.partials.productBox")
</div>
@endforeach
</div>

  <div class = "homebanner one">
    <img class ="hand" src="{{ asset('Images/the-hand.png') }}">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="info-box-content-areaes">
      <div class="info-box-content-area">
      <h2>CUSTOMIZED SCENES FOR DAY OR NIGHT, HOME OR AWAY</h2>
      <p>Program groups of lights for entertaining, events, or certain times of day or night.</p>
    </div>
  </div>
  </div>
  </div>
  </div>
  <div class = "homebanner two"><div class="timed-event reveal">"Brew coffee at 6:00 am"</div>
</div>
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="info-box-content-areaes">
      <div class="info-box-content-area">
      <h2>Schedule Timed events for Conneted Devices</h2>
      <p>Schedule what upi want, when you want it. Set lighting and other
        devices to turn on, turn off, or dim at certain times of the day.</p>
    </div>
  </div>
  </div>
  </div>
  </div>
  <div class = "homebanner three"></div>
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="info-box-content-areaes">
      <div class="info-box-content-area">
      <h2>Control with One Touch From Anywhere **</h2>
      <p>Whether home or away, you can control any of your smart devices from your smartphone, tablet, or PC</p>
    </div>
  </div>
  </div>
  </div>
  </div>
</div>
<div class="container-fluid">
<script src="{{ asset('Js/animate-scroll.js') }}"></script>
@endsection
