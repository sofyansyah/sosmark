@extends('layouts.master')

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