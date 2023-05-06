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
    <div class="card-header bg-primary text-white">Form Tambah Upaya Baru</div>
    <div class="card-body">
<form action='/regisbu/inputupayalain' method='post'>
{{ csrf_field() }}
@foreach ($regisupaya as $p)
<div class="form-group">
    <input type="hidden" class="form-control"  name='nomorregis' value='{{$p->nomorregis}}' enabled='false'>
  </div>
  @endforeach
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal Upaya Lain</label>
    <input type="date" class="form-control" name='tgl_upayalain' required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Kegiatan Upaya Lain</label>
    <select name='kegiatan_upayalain' class="form-control" required>
      <option>Sinergi Kejaksaan</option>
      <option>Sinergi Satwaker</option>
      <option>Sinergi Disnaker</option>
      <option>Sinergi Kepolisian</option>
      <option>Sinergi Lain - lain</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Hasil Upaya Lain</label>
    <select name="hasil_upayalain" id="hasil_upayalain" class="form-control" required>
    <option value="" selected></option>
    <option value="Patuh">Patuh</option>
    <option value="Tidak Patuh">Tidak Patuh</option>
    </select>
  </div>
 <div>
  <br>
 <input class="btn btn-primary" type="submit" value="Tambah">
 <a href='/regisbu'><button type="button" class="btn btn-danger" >Kembali</button></a>
</div></form></div></div></div></div></body></html>