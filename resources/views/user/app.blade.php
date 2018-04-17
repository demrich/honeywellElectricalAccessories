<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel=icon href={{ asset('favicon.ico')}} >
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick-theme.css') }}"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6379196/6231992/css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"/>
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
  <li class="list-group-item">
  
  <!-- Button trigger modal -->
<a href="" data-toggle="modal" data-target="#subscribe">
  Subscribe
</a>

<!-- Modal -->
<div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="subscribeTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLongTitle">Subscribe to our bi-weekly newsletter with new products and special offers!</h5>

      </div>
      <div class="modal-body">
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({ 
    css: '#email-66221cc5-2fcb-4fda-8682-38cfc6edb890 {background-color: white; margin-bottom:20px; color: #3097D1; padding: 5px;} .hs-button{background:#3097D1; color:#fff;  padding: 5px 20px;}  .hs-field-desc {display:none !important;}', 
    portalId: '454248',
    formId: '66221cc5-2fcb-4fda-8682-38cfc6edb890'
  });
</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
  
  
  
  </li>
</ul>
    </div>
  </div>

  <div class="footer-bottom-bar">
  <hr>
  <div class="row">
  <div class="col-sm-6">
    <p class="terms-bar">
    <a href="https://byjasco.com/terms-and-conditions" target="_blank">Terms and Conditions</a>|
    <a href="https://byjasco.com/privacy-policy" target="_blank">Privacy Policy</a>|
    <a href="http://honeywellelectricalaccessories.com/sitemap.xml" target="_blank">Sitemap</a>
  </p>
<p>© 2018 Honeywell International Inc.</p>
</div>
  <div class="col-sm-6"><p class="copyright-bar">The Honeywell Trademark is used under license from Honeywell International Inc.</p>
<p class="copyright-bar">Honeywell International Inc. makes no representation or warranties with respect to this product.</p></div>
  </div>
  </div>
</footer>
<iframe id="result"style="width:0; height:0; border:0; border:none"></iframe>
<script type="text/javascript" src="{{ asset('/js/slick.js') }}"></script>
<script type="text/javascript">
      $(document).ready(
        
        function () {
        $('.shop-carousel').slick({
          slidesToShow: 4, // Shows a three slides at a time
          slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
          infinite: true,
          arrows:true,
          responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
          ]

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

<script>
var cartButton = document.querySelectorAll('.add-to-cart');
    function addCart(str, button) {
      document.getElementById('result').src=str
      document.getElementById('result').onload = function() {
          return function() { 
      updateBtn(); 
      }
      }
    ();
        }
    function addedItem(){
      this.innerHTML = '<i class="material-icons">&#xE876;</i> <span>added!<span>'
      this.style.width = '125px'
      this.disabled = true;
    }
  cartButton.forEach(added => added.addEventListener('click', addedItem));
</script>

  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/454248.js"></script>
<!-- End of HubSpot Embed Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117342475-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117342475-1');
</script>


  </body>
</html>
