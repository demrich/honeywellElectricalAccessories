@extends("user.app")
@section("content")

<div id ="learn">
  <div class="carousel slide">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img class="img-responsive" src="{{ asset('Images/honeywell_learn_more.jpg') }}" alt="Hero Image">
        <div class="carousel-text-box text-center animated fadeInLeft">
          <h1 class="txt-big">Get Connected</h1>
          <p class="txt-small">Provide Coverage for your entire home</p>
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
    <span> * Use with mobile device requires compatible gateway &mdash; sold seperately</span>

    <div class="disclaimer">
      <div>Amazon, Alexa, and all related logos are trademarks of Amazon.com, Inc or its affiliates.</div>
      <div>The owners of the logos listed do not endorse this product in any way.<br> This product and its sellers have no affiliation<br> whatsoever wit the entities represented by the logos.</div>
      <div>Google Assistant is a trademark of Google Inc.</div>


    </div>

    <div class="signals">

  <div id="signal-one" class="signal">
    <span class="signal s1"></span>
    <span class="signal s2"></span>
    <span class="signal s3"></span>
  </div>

  <div id="signal-two" class="signal">
    <span class="signal s1"></span>
    <span class="signal s2"></span>
    <span class="signal s3"></span>
  </div>

  <div id="signal-three" class="signal">
    <span class="signal s1"></span>
    <span class="signal s2"></span>
    <span class="signal s3"></span>
  </div>

  <div id="signal-four" class="signal">
    <span class="signal s1"></span>
    <span class="signal s2"></span>
    <span class="signal s3"></span>
  </div>

  <div id="signal-five" class="signal">
    <span class="signal s1"></span>
    <span class="signal s2"></span>
    <span class="signal s3"></span>
  </div>

      <img class="img-responsive" src="{{ asset('Images/house-signal.jpg') }}" alt="Hero Image">
    </div>

    <div class="info-box-content-areaes">
      <div class="info-box-content-area">
      <h2>Your Home. Your Choices.</h2>
      <p>Each smart control repeats the signal up to 150 feet. Adding additional Honeywell Smart Controls extends the range of your network for whole home wireless control.</p>
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




</div>
  @endsection
