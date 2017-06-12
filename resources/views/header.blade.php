<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Schedule</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="@if(Request::is('/')) active @endif"><a href="{{url('/')}}">Post</a></li>
      <li class="@if(Request::is('autofollow')) active @endif"><a href="{{url('autofollow')}}">Auto Follow & Unfollow</a></li>
      <li class="@if(Request::is('following')) active @endif"><a href="{{url('following')}}">Following</a></li>
      <li class="@if(Request::is('whitelist')) active @endif"><a href="{{url('whitelist')}}">Whitelist</a></li>
      <li class="@if(Request::is('chart')) active @endif"><a href="{{url('chart')}}">Analytic</a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Admin
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">dody</a></li>
            <li><a href="#">jono</a></li>
            <li><a href="#">rani</a></li>
          </ul>
        </div>
      </form>
      </div>
    </div>
  </nav>
