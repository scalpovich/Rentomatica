<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/seller" style="margin-top: -25px;"><h2><b>Rentomatica</b></h2>{{-- SOLID. --}}</a>
    </div>
    <div class="navbar-collapse collapse navbar-right">
      <ul class="nav navbar-nav">
        <li @yield('select_HOME')><a href="/seller/home"><button type="button" class="btn btn-success btn-xs"><b>
        @if(Auth::guest())
          LOGIN
        @else  
          HOME
        @endif
        </b></button></a></li>
        <li @yield('select_ABOUT')><a href="/seller/about">ABOUT</a></li>
        <li @yield('select_CONTACT')><a href="/seller/contact">CONTACT</a></li>
        <li><a href="/"><button type="button" class="btn btn-info btn-xs"><b>BUYER'S SECTION</b></button></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>