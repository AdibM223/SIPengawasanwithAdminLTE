<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wilayah Kerja Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">INPUT WILAYAH KERJA BARU</div>
    <div class="card-body">
<form action='/useradmin/wilker/input' method='post'>
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Wilayah Kerja</label>
    <input type="text" class="form-control"  name='username' value='' required >
  </div>

 <div>
 <br>
 <input class="btn btn-primary" type="submit" value="Input">
 <a href='/wilker'><button type="button" class="btn btn-danger" >Kembali</button></a>
</div>
</form>
</div>
</div>
</div>
</div>
 </body>
 <script>
  function kepatuhan()
  {
    var patuhnya=document.getElementById('kepatuhanku').value;
    if(patuhnya == "Patuh")
  {
    document.getElementById('status_tahap2').value='Patuh';
  }
  else if (patuhnya == "Tidak Patuh")
  {
    document.getElementById('status_tahap2').value='Tidak Patuh';
  }
  }
 </script>
</html>