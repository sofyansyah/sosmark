
@extends('layouts.master')
<!-- Styles -->
<style type="text/css">
th{
  font-size: 15px;
  font-weight: normal;
    background-color: #4CAF50;
    color: white;

}
td{
  font-size: 15px;
}
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
.menu1 li{
  display: inline-block;
}

.menu1{
  text-align: center;
}
.menu1 li .btn{
  padding: 5px 20px;
  border-radius: 50px;
}
.post{
  padding: 10px 5px;
  border: 1px solid #ddd;
  border-radius: 10px;
}
.nopadding{
  padding: 0px;
}
.details{
  margin-bottom: 0;
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
  padding: 5px 8px;
  background-color: #ddd;
  border-radius: 10px;
  font-size: 12px;
}
.col-md-6 h4{margin-top: 0;}
#myInput {
  background-image: url('/img/icon/search.svg');
  background-position: 10px 7px;
  background-repeat: no-repeat;
  background-size: 20px;
  width: 200px;
  font-size: 15px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  float: right;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
</style>
@section('content')
<div class="panel-body">
 <div class="col-md-12" style="padding: 10px; border: 1px solid #ddd;">
  <h4>Daftar Following Anda</h4>
  <p>Silahkan tambah ke Whitelist user yang tidak ingin anda unfollow otomatis</p>

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names . ." title="Type in a name" class="form-control">

  <table class="table table-bordered text-center" id="myTable">
    <thead >
      <tr>
        <th style="text-align: center;">Following</th>
        <th style="text-align: center;">Status</th>
        <th style="text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>joe</td>
        <td><button type="button" class="btn btn-info">Following</button></td>
        <td><button type="button" class="btn btn-warning">Tambah ke Whitelist</button></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td><button type="button" class="btn btn-info">Following</button></td>
        <td><button type="button" class="btn btn-warning">Tambah ke Whitelist</button></td>
      </tr>
      <tr>
        <td>July</td>
        <td><button type="button" class="btn btn-info">Following</button></td>
        <td><button type="button" class="btn btn-warning">Tambah ke Whitelist</button></td>
      </tr>
    </tbody>
  </table>
  <ul class="pagination">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</div>
</div>

<script>
  function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
</script>



@endsection

