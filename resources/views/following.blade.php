
@extends('layouts.master')
<style type="text/css">
  p{
    font-size: 15px;
    text-align: center;
    margin-bottom: 20px!important;
  }
</style>
@section('content')
<style type="text/css">
  @media (max-width: 767px) {
  .panel-body .col-md-12{
    margin-top: 20px;
}
</style>

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

