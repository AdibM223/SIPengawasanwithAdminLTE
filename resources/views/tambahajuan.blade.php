<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Master BU Terdaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Form Tambah Ajuan Sertifikat Baru</div>
    <div class="card-body">
<form action='/ajuansertif/inputajuan' method='post' enctype="multipart/form-data">
{{ csrf_field() }}

<div class="form-group">
    <label for="exampleFormControlSelect1"> Kode Badan Usaha</label>
    <select class="form-control"  name='kode_bu'>
      @foreach ($mstrbu as $r)
      <option>{{$r->kode_bu}}</option>
      @endforeach
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Surat</label>
    <input type="text" class="form-control"  name='no_surat'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal Surat</label>
    <input type="date" class="form-control" name='tgl_surat' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Berkas Pendukung</label>
    <input type="file" class="form-control" name='nama_file' >
  </div>
 <div>
  <br>
 <input class="btn btn-primary" type="submit" value="Tambah">
 <a href='/'><button type="button" class="btn btn-danger" >Kembali</button></a>
</div>

</form>

</div>
</div>
</div>
</div>
 </body>
</html>