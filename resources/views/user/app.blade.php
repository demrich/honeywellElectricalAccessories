<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="Css/style.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body>
@include("user.partials.topnav")
@yield("content")
  <div class="modal fade" id="quickViewModel" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content" id="modelContentArea">

      </div>
    </div>
  </div>
<footer>
  <div class="row">
    <div class="col-sm-3">
      <span class="heading">FEATURED</span>
      <ul class="list-group">
  <li class="list-group-item"><a href="">In-wall Switches & Dimmers</a></li>
  <li class="list-group-item"><a href="">Plug-in Switches & Dimmers</a></li>
</ul>
    </div>
    <div class="col-sm-3">
      <span class="heading">SERVICE & SUPPORT</span>
      <ul class="list-group">
  <li class="list-group-item"><a href="">Visit Support</a></li>
  <li class="list-group-item"><a href="">Product Manuals</a></li>
</ul>
    </div>
    <div class="col-sm-3">
      <span class="heading">Contact</span>
      <ul class="list-group">
  <li class="list-group-item"><a href="">About Us</a></li>
  <li class="list-group-item"><a href="">Sign Up For Email</a></li>
</ul>
    </div>
  </div>

  <div class="footer-bottom-bar">
  <hr>
  <div class="row">
  <div class="col-sm-6">
    <p class="terms-bar">
    <a href="">Terms and Conditions</a>|
    <a href="">Privacy Policy</a>|
    <a href="">Contact Honeywell</a>
  </p>
<p>© 2017 Honeywell International Inc.</p>
</div>
  <div class="col-sm-6"><p class="copyright-bar">The Honeywell Trademark is used under license from Honeywell International Inc.</p>
<p class="copyright-bar">Honeywell International Inc. makes no representation or warranties with respect to this product.</p></div>
  </div>
  </div>
</footer>

    <script type="text/javascript" src="Js/slick.min.js"></script>

<script type="text/javascript">
      $(document).ready(function () {
        $('.shop-carousel').slick({
          infinite: true,
          slidesToShow: 4, // Shows a three slides at a time
          slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
          arrows: false
        });
      });
      function openModel(productId){
var request = $.ajax({
  url: "/showModel",
  type: "POST",
   data:{
    "_token": "{{ csrf_token() }}",
    productId:productId,
  }
});
request.done(function(replyResult) {
$('#modelContentArea').html(replyResult);
});
request.fail(function(jqXHR, textStatus) {
  alert( "Request failed: " + textStatus);
});
}
    </script>
  </body>
</html>
