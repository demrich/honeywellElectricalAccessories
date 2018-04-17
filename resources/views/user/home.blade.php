@extends("user.app")
@section("content")
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img class="hidden-sm hidden-xs" src="{{ asset('Images/honeywell-hero.jpg') }}" alt="Hero Image">
        <img class="hidden-md hidden-lg hidden-xl" src="{{ asset('Images/honeywell-mobile-1.jpg') }}" alt="hero image">
      <div class="carousel-text-box text-center animated fadeInLeft">
        <h1 class="txt-big">VOICE CONTROL</h1>
        <p class="txt-small">USE GOOGLE ASSISTANT AND AMAZON ALEXA TO CONTROL
AND SCHEDULE HONEYWELL SMART CONTROLS*</p>
      </div>
      <button class="btn btn-info custom-blue-btn carousel-btn animated fadeInUp"><a href="{{ url('/learn') }}">Learn More</a></button>
    </div>

  </div>
  <div class="hero reveal">"Turn on the <br>night stand light" </div>

  <!-- Left and right controls -->
  <div class="container">
<center><h2 class="main-heading">Browse Our Popular Products</h2></center>
<div class="slick carousel shop-carousel">
@foreach($products as $product)

@include("user.partials.productBox")

@endforeach
</div>
</div>

  <div class = "homebanner one">
    <img class ="hand hidden-sm hidden-xs" src="{{ asset('Images/the-hand.png') }}">
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
      <h2>Schedule Timed events for Connected Devices</h2>
      <p>Schedule what you want, when you want it. Set lighting and other
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
      <p>Whether home or away, you can control any of your smart devices from your smartphone, tablet, or PC.</p>
    </div>
  </div>
  </div>
  </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <span class="disclaimer">
         &ast; All products in the photo and their respective trademarks are sold separately by entities that are not the operator of this site.
      </span>
    </div>
    <div class="col-md-6">
      <span class="disclaimer">
          &ast; &ast; Use with mobile device and voice control requires compatible gateway — sold separately.<br><br>
      </span>
    </div>

    </div>
  </div>
</disv>
<script src="{{ asset('js/animate-scroll.js') }}"></script>
@endsection
