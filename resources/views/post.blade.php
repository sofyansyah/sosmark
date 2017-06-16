@extends('layouts.master')

@section('css_styles')
<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
<link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">
@endsection

@section('content')

<style>
  .dropzone{
    padding: 0!important;
    min-height: 0!important;
    background
  }
  .modal-footer{
    border:none!important;
  }
  .dropzone .dz-message{
    margin: 1.5em 0!important;
    font-size: 40px;
    color: #aaa;
  }
  .dropzone .dz-preview .dz-image{
    border-radius: 0;
    width: 100%;
    height: 100%;
  }
  .dropzone .dz-preview .dz-image img{
    width: 168px;
  }
  .dropzone .dz-preview.dz-image-preview{
    background: #fafafa!important;
    margin: 0;
    
  }
  .form-group .col-md-4{
   padding: 10px !important;
 }
 .modal-footer .btn-success{
  margin: 5% 0%!important;

}
@media (max-width: 480px) {
  .panel-body .col-md-4{
    padding: 0;
  }
}
.hover11 figure img {
  opacity: 1;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.hover11 figure:hover img {
  opacity: .5;
}
.form{display: none;}
.hidden{display: none;}
.show{display: block;}
</style>

<div class="panel-body" style="padding-bottom: 0">
  <ul class="menu1">
    <li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">+ Post</button></li>
    <li><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1">+ Album</button></li>
    <li><a href="" class="btn btn-danger">+ Story</a></li>
  </ul>
</div>

<div class="panel-body">
  <div class="col-md-12">

    @forelse($post as $data)
    @php
    $foto = \App\Foto::where('id_album',$data->id)->first();
    @endphp
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <div class="hover11 column">
          <div>
            <figure>
              <img src="{{url('img/'.$foto->foto)}}" width="100%" height="150" data-toggle="modal" data-target="#myModal{{$data->id}}" style="cursor:pointer;"/>
            </figure>
            <ul class="details1">
              <li><i class="fa fa-clock-o fa-lg"> {{date('H:i',strtotime($data->tanggal))}}</i></li>
              <li style="float: right;"> {{title_case($data->type)}}</li>
            </ul>
            <p>{{date('D, d M Y',strtotime($data->tanggal))}}</p>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL -->

    <!-- Modal picture -->
    <div class="modal fade" id="myModal{{$data->id}}" role="dialog">
      <div class="modal-dialog modal-lg">
        
        @if($data->type == 'post')
        <!-- Modal SINGLE-->
        <div class="modal-content">
          <div class="modal-body" style="padding:0;">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <div class="col-md-8" style="padding:0;">
            <img src="{{asset('img/'.$foto->foto)}}" width="100%" />
          </div>
          <div class="col-md-4" style="padding: 15px 30px;">
           <div class="dropdown pull-right">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
              <i class="fa fa-ellipsis-h"></i></button>
              <ul class="dropdown-menu">
                <li><a onclick="myFunction()">Edit</a></li>
                <li><a href="{{url('postsingle/hapus/'.$data->id)}}">Delete</a></li>
              </ul>
            </div>
            <div class="form-group">
              <label>Caption</label>
              <p class="caption">{{$data->caption}}</p>

              <form action="{{url('postsingle/edit/'.$data->id)}}" method="POST" class="form">
                {{csrf_field()}}
                <div class="form-group">
                  <textarea name="caption" class="form-control" cols="30" rows="10">{{$data->caption}}</textarea>
                </div>
                <div id="demo" style="float: right; margin-top:20px; "></div>
              </form>

            </div>
            <ul class="details">
              <li><i class="fa fa-clock-o fa-lg" style="color: #333;"> {{date('H:i',strtotime($data->tanggal))}}</i></li>
              {{-- <li><i class="fa fa-spinner fa-lg" style="color: #333;"> Process</i></li> --}}
              <li><i class="fa fa-calendar fa-lg" style="color: #333;"> {{date('D, d M Y',strtotime($data->tanggal))}}</i></li>
            </ul>
          </div>
        </div>
      </div>

      @elseif($data->type == 'album')
      <!-- MODAL ALBUM -->
      @php
      $foto_album = \App\Foto::where('id_album',$data->id)->where('type','album')->get();
      $foto1 = \App\Foto::where('id_album',$data->id)->where('type','album')->first();
      @endphp

      <div class="modal-content" style="overflow: hidden;">
        <div class="col-md-8" style="padding: 0px;">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              @foreach($foto_album as $v)
              <div class="item @if($v->id == $foto1->id ) active @endif">
                <img class="img-responsive" src="{{asset('img/'.$v->foto)}}">
              </div>
              @endforeach
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="col-md-4" style="padding: 15px 30px;">
         <div class="dropdown pull-right">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            <i class="fa fa-ellipsis-h"></i></button>
            <ul class="dropdown-menu">
              <li><a onclick="myFunction()">Edit</a></li>
              <li><a href="{{url('postsingle/hapus/'.$data->id)}}">Delete</a></li>
            </ul>
          </div>
          <div class="form-group">
            <label>Caption</label>
            <p class="caption">{{$data->caption}}</p>

            <form action="{{url('postsingle/edit/'.$data->id)}}" method="POST" class="form">
              {{csrf_field()}}
              <div class="form-group">
                <textarea name="caption" class="form-control" cols="30" rows="10">{{$data->caption}}</textarea>
              </div>
              <div id="demo" style="float: right; margin-top:20px; "></div>
            </form>

          </div>
          <ul class="details">
            <li><i class="fa fa-clock-o fa-lg" style="color: #333;"> {{date('H:i',strtotime($data->tanggal))}}</i></li>
            {{-- <li><i class="fa fa-spinner fa-lg" style="color: #333;"> Process</i></li> --}}
            <li><i class="fa fa-calendar fa-lg" style="color: #333;"> {{date('D, d M Y',strtotime($data->tanggal))}}</i></li>
          </ul>
        </div>
      </div>
      @endif


    </div>
  </div>





  @empty
  <div class="col-md-12">
    <div class="alert alert-info text-center">
      <p>Sorry data has empty</p>
    </div>
  </div>
  @endforelse

  



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

              <input type="text" name="" class="form-control date-picker" placeholder="<?phpdate_default_timezone_set("Asia/Jakarta");echo date("Y/m/d h:m");?>">
              <input type="text" name="date" class="form-control date-picker" placeholder="<?php date_default_timezone_set("Asia/Jakarta");echo date("Y/m/d h:m");?>">

            </div>
            <div class="form-group">
              <label>Caption</label>
              <textarea name="caption" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label>Foto</label><br>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId">
                  <div class="dz-default dz-message"><span>1</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId1">
                  <div class="dz-default dz-message"><span>2</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId2">
                  <div class="dz-default dz-message"><span>3</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId3">
                  <div class="dz-default dz-message"><span>4</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId4">
                  <div class="dz-default dz-message"><span>5</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId5">
                  <div class="dz-default dz-message"><span>6</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId6">
                  <div class="dz-default dz-message"><span>7</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId7">
                  <div class="dz-default dz-message"><span>8</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="dropzone" id="myId8">
                  <div class="dz-default dz-message"><span>9</span>
                  </div></div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="dropzone" id="myId9">
                    <div class="dz-default dz-message"><span>10</span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="modal-footer">
                <button class="btn btn-success form-actions">Save</button>
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
              <textarea name="caption" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label>Foto</label><br>
              <div class="col-md-4 col-md-offset-4">
                <div class="dropzone" id="myIdol">
                  <div class="dz-default dz-message"><span>1</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-success form-actions">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('javascript')
  <script src="{{asset('js/dropzone.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
  <script>

    $('.date-picker').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        // showMeridian: 1
      });

    function myFunction() {
      $('.caption').addClass('hidden');
      $('.form').addClass('show');
      document.getElementById("demo").innerHTML = "<button class='btn btn-success' style='padding:5px 25px;'>Save</buton>";
    }
  </script>
  <script type="text/javascript">
    var baseUrl = "{{ url('/') }}";
    var token = "{{csrf_token()}}";
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("div#myId",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId1",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId2",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId3",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId4",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId5",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId6",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId7",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId8",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myId9",  {
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
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>  

        <script type="text/javascript">
          var baseUrl = "{{ url('/') }}";
          var token = "{{csrf_token()}}";
          Dropzone.autoDiscover = false;
          var myDropzone = new Dropzone("div#myIdol",  {
            url: baseUrl + "/postfotosingle",
            params: {
              _token: token
            },
            init: function () {
              $(this.element).addClass("dropzone");

              this.on("success", function (file) {                    
                $(".form-actions").append("<input type='hidden' name='pict' value='"+file.name+"'>");
              });
            },
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>         
        @endsection



