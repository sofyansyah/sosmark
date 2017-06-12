@extends('layouts.master')

@section('content')


<div class="panel-body" style="padding-bottom: 0">
  <ul class="menu1">
    <li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">+ Post</button></li>
    <li><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1">+ Album</button></li>
    <li><a href="" class="btn btn-danger">+ Story</a></li>
  </ul>
</div>

<div class="panel-body">
  <div class="col-md-12">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/>
        <ul class="details1">
          <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
          <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
        </ul>
        <p>Wednesday, 7 June 2017</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/>
        <ul class="details1">
          <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
          <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
        </ul>
        <p>Wednesday, 7 June 2017</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/>
        <ul class="details1">
          <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
          <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
        </ul>
        <p>Wednesday, 7 June 2017</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/>
        <ul class="details1">
          <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
          <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
        </ul>
        <p>Wednesday, 7 June 2017</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/>
        <ul class="details1">
          <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
          <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
        </ul>
        <p>Wednesday, 7 June 2017</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/>
        <ul class="details1">
          <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
          <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
        </ul>
        <p>Wednesday, 7 June 2017</p>
      </div>
    </div>

  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="form-group">
          <label>Schedule Date & Time</label>
          <input type="text" name="" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label>Caption</label>
          <textarea name="" class="form-control"></textarea>
        </div>
        <div class="upload">
          <input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" style="visibility: hidden;float: right;" />
          <label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>
        </div>
         <a onclick="tambah()" style="cursor:pointer;text-decoration:underline;">Tambah Upload</a>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-success" value="Submit" style="text-align: right;"> 
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <div class="form-group">
        <label>Schedule Date & Time</label>
        <input type="text" name="" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <label>Caption</label>
        <textarea name="" class="form-control"></textarea>
      </div>
      <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected " style="visibility: hidden;float: right;" />
      <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
      <div class="modal-footer">
        <input type="submit" name="submit" class="btn btn-success" value="Submit" style="text-align: right;">
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal picture -->
<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body" style="padding:0;">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <div class="col-md-8" style="padding-left: 0;">
        <img src="{{asset('img/image.jpg')}}" width="100%" />
      </div>
      <div class="col-md-4">
       <div class="dropdown pull-right">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
          <i class="fa fa-ellipsis-h"></i></button>
          <ul class="dropdown-menu">
            <li><a href="">Edit</a></li>
            <li><a href="">Delete</a></li>
          </ul>
        </div>
        <div class="form-group">
          <label>Caption</label>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu varius ligula. Curabitur consectetur ipsum eget urna lobortis dapibus. Quisque ultricies ligula felis, sit amet suscipit libero maximus euismod</p>
        </div>
        <ul class="details">
          <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
          <li><i class="fa fa-spinner fa-lg"> Process</i></li>
          <li><i class="fa fa-calendar fa-lg"> Wednesday, 7 June 2017</i></li>
        </ul>
      </div>
      <div class="modal-footer" style="border: none; padding: 0 10px;">
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">

  function tambah(){
    $(".upload").append('<input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" style="visibility: hidden;float: right;" /><label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>').children(':last');
  }
</script>

@endsection


