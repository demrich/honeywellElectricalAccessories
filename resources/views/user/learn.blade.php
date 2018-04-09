@extends("user.app")
@section("content")

<div id ="learn">
  <div class="carousel slide">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img class="img-responsive" src="{{ asset('Images/honeywell_learn_more.jpg') }}" alt="Hero Image">
        <div class="carousel-text-box text-center">
          <h1 class="txt-big">Get Connected</h1>
          <p class="txt-small">Provide Coverage for you entire home</p>
        </div>
      </div>
    </div>
  </div>

    <div class="container-fluid">

    <div class="info-box-content-areaes">
      <div class="info-box-content-area">
      <h2>Your Home. Your Choices.</h2>
      <p>Control all Honeywell Z-Wave devices with Google Assistant<br> or Amazon Alexa with compatible hubs.</p>
    </div>
    </div>

    <div class="assistant">
    <div>
      <img class="img-responsive" src="{{ asset('Images/alexa-enabled.png')}}">
    </div>

    <div>
      <svg height="10" width="50">
      <line class="hidden-sm hidden-xs" x1="0" y1="0" x2="50" y2="0" />
      </svg>
      <span class="learn-title">OR</span>
      <svg height="10" width="50">
      <line class="hidden-sm hidden-xs" x1="0" y1="0" x2="50" y2="0" />
      </svg>
    </div>

    <div>
      <img class="img-responsive" src="{{ asset('Images/google-assistant.png')}}">

    </div>

    </div>

      <hr class="hr-text" data-content="WITH">
      <br><br>
    </div>

    <div class="works-with">
      <div><img src="{{ asset('Images/brands/smart-things.png') }}"></div>
      <div><img src="{{ asset('Images/brands/wink.png') }}"> </div>
      <div><img src="{{ asset('Images/brands/pulse.png') }}"> </div>
      <div><img src="{{ asset('Images/brands/smart-security.png') }}"> </div>
      <div><img src="{{ asset('Images/brands/home-seer.png') }}"> </div>
      <div><img src="{{ asset('Images/brands/nexia.png') }}"> </div>
      <div><img src="{{ asset('Images/brands/trane.png') }}"> </div>
      <div><img src="{{ asset('Images/brands/vera.png') }}"> </div>
      <div><img src="{{ asset('Images/brands/fibaro.png') }}"> </div>
    </div>
    <span> * Use with mobile device requires compatible gatewat &mdash; sold seperately</span>

    <div class="disclaimer">
      <div>Amazon, Alexa, and all related logos are trademarks of Amazon.com, Inc or its affiliates.</div>
      <div>The ownersof the logos listed fo not endorse this product in any way.<br> This product and its sellers have no affiliation<br> whatsoever wit the entities represented by the logos.</div>
      <div>Google Assistant is a trademark of Google Inc.</div>


    </div>

    <div class="signals">
      <img class="img-responsive" src="{{ asset('Images/house-signal.jpg') }}" alt="Hero Image">
    </div>

    <div class="info-box-content-areaes">
      <div class="info-box-content-area">
      <h2>Your Home. Your Choices.</h2>
      <p>Each smart control repeats the signal up to 150 feet. Adding additional Honeywell Smart Controls extends the range of your network for whole home wireless control.</p>
      <button class="btn btn-info custom-blue-btn">Learn More</button>
    </div>
    </div>






</div>
  @endsection
