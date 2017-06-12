@extends('layouts.master')

@section('css_styles')
<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('css/date-picker.css')}}">
@endsection
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
      <form action="{{url('postalbum')}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
          <div class="form-group">
            <label>Schedule Date & Time</label>
            <input type="text" name="" class="form-control date-picker" placeholder="">
          </div>
          <div class="form-group">
            <label>Caption</label>
            <textarea name="" class="form-control"></textarea>
          </div>
            <div class="form-group">
                <label>Foto</label>
                <div class="dropzone" id="myId"></div>
            </div>
          <div class="modal-footer">
            <button class="btn btn-success form-actions">Simpan</button>
          </div>
      </form>
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
      <form action="{{url('postsingle')}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
       <div class="form-group">
        <label>Schedule Date & Time</label>
        <input type="text" name="date" class="form-control date-picker">
      </div>
      <div class="form-group">
        <label>Caption</label>
        <textarea name="" class="form-control"></textarea>
      </div>
      <div class="form-group">
            <label>Foto</label>
            <div class="dropzone" id="myIdol"></div>
      </div>
      
      <div class="modal-footer">
        <button class="btn btn-success form-actions">Simpan</button>
      </div>
      </form>
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
@endsection
@section('javascript')
<script src="{{asset('js/dropzone.js')}}"></script>
<script src="{{asset('js/date-picker.js')}}"></script>
<script>
  $(".date-picker").datepicker();
</script>
<script type="text/javascript">
        var baseUrl = "{{ url('/') }}";
        var token = "{{csrf_token()}}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#myId", {
            url: baseUrl + "/postfotoalbum",
            params: {
                _token: token
            },
            init: function () {
                $(this.element).addClass("dropzone");

                this.on("success", function (file) {                    
                    $(".form-actions").append("<input type='hidden' name='foto[]' value='"+file.name+"'>");
                });
            },
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            addRemoveLinks: true
        });
</script>
<script type="text/javascript">
        var baseUrl = "{{ url('/') }}";
        var token = "{{csrf_token()}}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#myIdol", {
            url: baseUrl + "/postfotosingle",
            params: {
                _token: token
            },
            init: function () {
                $(this.element).addClass("dropzone");

                this.on("success", function (file) {                    
                    $(".form-actions").append("<input type='hidden' name='pict[]' value='"+file.name+"'>");
                });
            },
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            addRemoveLinks: true
        });
</script>
@endsection


