@extends('layouts.master')

<!-- Styles -->
<style type="text/css">
 .panel{
  margin-top: 20px;
}
.panel-heading{
  background-color: #fff!important;
}
.panel-heading h3{
  text-align: center;
}
.col-md-3 {
  color: #fafafa;
  text-align: center;
  padding: 20px; 
  height: 80px;          
}
.col-md-3 a{
  color: #fafafa;
}
.auto li{
  list-style-type: none;
}
.auto{
  padding-left: 0
}
.nopadding{
  padding: 0px;
}

.radio{
  margin-top: 0;
}
.hashtag{
  padding: 5px;
  border: 1px solid #ddd;
  border-radius:5px;

}
.hashtag li{
  display: inline-block;
  margin-bottom: 5px;
}
.hashtag li .btn{
  font-size: 10px;
  padding: 5px 8px;
}
.col-md-7 h4{margin-top: 0; font-size: 18px;}
.onoffswitch {
  position: relative;
  -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
  display: none;
}
.onoffswitch-label {
  display: block; overflow: hidden; cursor: pointer;
  border: 2px solid #999999; border-radius: 20px;
}
.onoffswitch-inner {
  display: block; width: 200%; margin-left: -100%;
  transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
  display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
  font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
  box-sizing: border-box;
}
.onoffswitch-inner:before {
  content: "ON";
  padding-left: 10px;
  background-color: #34A7C1; color: #FFFFFF;
}
.onoffswitch-inner:after {
  content: "OFF";
  padding-right: 10px;
  background-color: #EEEEEE; color: #999999;
  text-align: right;
}
.onoffswitch-switch {
  display: block; width: 18px; margin: 6px;
  background: #FFFFFF;
  position: absolute; top: 0; bottom: 0;
  right: 56px;
  border: 2px solid #999999; border-radius: 20px;
  transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
  margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
  right: 0px; }
</style>
@section('content')
<div class="panel-body">
 <div class="col-md-5" style="padding: 10px; border: 1px solid #ddd;">
   <ul class="auto">
    <li><p>Auto Follow</p>      <div class="onoffswitch">
      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
      <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
      </label>
    </div></li>
    <li><p>Auto Like</p>       <div class="onoffswitch">
      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
      <label class="onoffswitch-label" for="myonoffswitch1">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
      </label>
    </div></li>
    <li><p>Auto Unfollow not Follow back</p>      <div class="onoffswitch">
      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
      <label class="onoffswitch-label" for="myonoffswitch2">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
      </label>
    </div></li>
    <li><p>Auto Unfollow </p>     <div class="onoffswitch">
      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
      <label class="onoffswitch-label" for="myonoffswitch3">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
      </label>
    </div>
    <p>All Except Whitelist</p>      <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
    <label class="onoffswitch-label" for="myonoffswitch4">
      <span class="onoffswitch-inner"></span>
      <span class="onoffswitch-switch"></span>
    </label>
  </div></li>
</ul>



</div>  

<div class="col-md-7">
  <h4>Input Hashtag Target (Pisahkan dengan tanda koma (,))</h4>
  <ul class="hashtag">
    <li><a href="#" class="btn btn-warning">Lorem</a></li>
    <li><a href="#" class="btn btn-warning">lorem ipsum</a></li>
    <li><a href="#" class="btn btn-warning">Lorem</a></li>
    <li><a href="#" class="btn btn-warning">lorem ipsum</a></li>
    <li><a href="#" class="btn btn-warning">Lorem</a></li>
    <li><a href="#" class="btn btn-warning">lorem ipsum</a></li>
    <li><a href="#" class="btn btn-warning">Lorem</a></li>
    <li><a href="#" class="btn btn-warning">lorem ipsum</a></li>
    <li><a href="#" class="btn btn-warning">Lorem</a></li>
    <li><a href="#" class="btn btn-warning">lorem ipsum</a></li>
    <li><a href="#" class="btn btn-warning">Lorem</a></li>
    <li><a href="#" class="btn btn-warning">lorem ipsum</a></li>
  </ul>
  <button class="btn btn-success" style="float: right;">Save Hashtag</button>
</div>  
</div>


@endsection