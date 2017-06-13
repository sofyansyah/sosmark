<style type="text/css">  
 @media (min-width: 768px) {
  .menu-1 .dropdown{
    display: none;
  }
}
@media (max-width: 767px) {
  .navbar-form .dropdown{
    display: none;
  }
  .container{
    padding: 0;
  }
  .menu1{
    margin-top: 25px;
  }
}
.menus{
  left:-82px!important;
}
.navbar-default{
  background-color: #fff;
}

</style>

<nav class="navbar navbar-default">
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
  <div class="col-md-12 pull-right menu-1">
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Admin
        <span class="caret"></span></button>
        <ul class="dropdown-menu menus">
          <li><a href="#">dody</a></li>
          <li><a href="#">jono</a></li>
          <li><a href="#">rani</a></li>
        </ul>
      </div>
    </div>
