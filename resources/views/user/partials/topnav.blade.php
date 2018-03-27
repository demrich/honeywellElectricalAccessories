<nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse container" id="myNavbar">
        <a href="/">
          <img class="brand" src="{{ asset('Images/honeywell_logo.png') }}">
          </a>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/shop">Shop</a></li>
        <li><a href="/learn">Learn</a></li>
        <li><a href="/cart"><span class="shopping-bag"></span></a></li>
        <li>  
<form action="/search" style="width:170px;margin:32px 0;">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search this site" name="search">
      <div class="input-group-btn">
        <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
</li>
      </ul>
    </div>
</nav>
<hr>