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

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <div class="hover11 column">
          <div>
            <figure><img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/></figure>
            <ul class="details1">
              <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
              <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
            </ul>
            <p>Wednesday, 7 June 2017</p>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <div class="hover11 column">
          <div>
            <figure><img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/></figure>
            <ul class="details1">
              <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
              <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
            </ul>
            <p>Wednesday, 7 June 2017</p>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <div class="hover11 column">
          <div>
            <figure><img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/></figure>
            <ul class="details1">
              <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
              <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
            </ul>
            <p>Wednesday, 7 June 2017</p>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <div class="hover11 column">
          <div>
            <figure><img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/></figure>
            <ul class="details1">
              <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
              <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
            </ul>
            <p>Wednesday, 7 June 2017</p>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <div class="hover11 column">
          <div>
            <figure><img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/></figure>
            <ul class="details1">
              <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
              <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
            </ul>
            <p>Wednesday, 7 June 2017</p>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <div class="hover11 column">
          <div>
            <figure><img src="{{asset('img/image.jpg')}}" width="100%" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;"/></figure>
            <ul class="details1">
              <li><i class="fa fa-clock-o fa-lg"> 07.00</i></li>
              <li style="float: right;"><i class="fa fa-spinner fa-lg"> Process</i></li>
            </ul>
            <p>Wednesday, 7 June 2017</p>
          </div>
          <div>
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
                <input type="text" name="" class="form-control date-picker" placeholder="<?phpdate_default_timezone_set("Asia/Jakarta");echo date("Y/m/d h:m");?>">
              </div>
              <div class="form-group">
                <label>Caption</label>
                <textarea name="" class="form-control"></textarea>
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
                <textarea name="" class="form-control"></textarea>
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

    <!-- Modal picture -->
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body" style="padding:0;">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <div class="col-md-8" style="padding:0;">
            <img src="{{asset('img/image.jpg')}}" width="100%" />
          </div>
          <div class="col-md-4" style="padding: 15px 30px;">
           <div class="dropdown pull-right">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
              <i class="fa fa-ellipsis-h"></i></button>
              <ul class="dropdown-menu">
                <li><a onclick="myFunction()">Edit</a></li>
                <li><a href="">Delete</a></li>
              </ul>
            </div>
            <div class="form-group">
              <label>Caption</label>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu varius ligula. Curabitur consectetur ipsum eget urna lobortis dapibus. Quisque ultricies ligula felis, sit amet suscipit libero maximus euismod</p>
            </div>
            <ul class="details">
              <li><i class="fa fa-clock-o fa-lg" style="color: #333;"> 07.00</i></li>
              <li><i class="fa fa-spinner fa-lg" style="color: #333;"> Process</i></li>
              <li><i class="fa fa-calendar fa-lg" style="color: #333;"> Wednesday, 7 June 2017</i></li>
            </ul>
            <div id="demo" style="float: right; margin-top:20px; "></div>
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
                $(".form-actions").append("<input type='hidden' name='foto[]' value='"+file.name+"'>");
              });
            },
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            maxFiles: 1,
            addRemoveLinks: true
          });
        </script>         
        @endsection



