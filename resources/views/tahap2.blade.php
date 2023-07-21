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
    <div class="card-header bg-primary text-white">Form Registrasi Tahap 2</div>
    <div class="card-body">
<form action='/regisbu/updatetahap2' method='post'>
{{ csrf_field() }}
@foreach ($regisbu as $p)
<div class="form-group">
    <label for="exampleFormControlSelect1"> Kode Registrasi Badan Usaha</label>
    <input type="text" class="form-control"  name='nomorregis' value='{{$p->nomorregis}}' readonly>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Badan Usaha</label>
    <input type="text" class="form-control"  name='nama_bu_regis' value='{{$p->nama_bu_regis}}' readonly>
  </div>
  @endforeach
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tanggal Pemeriksaan</label>
    <input type="date" class="form-control" name='tgl_pemeriksaan' required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nama Pemeriksa</label>
    <input type="text" class="form-control" name='nama_pemeriksa' required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Hasil Pemeriksaan</label>
    <input type="text" class="form-control" name='hasil_pemeriksaan' required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tanggal SPHP</label>
    <input type="date" class="form-control" name='tgl_SPHP' required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kepatuhan</label>
    @foreach ($regisbu as $p)
    @if ($p->selisih3 > 3)
    <select name="kepatuhanku" id="kepatuhanku" class="form-control" onchange="kepatuhan();" required  >
    <option value="" selected></option>
    <option value="Tidak Patuh"  >Tidak Patuh</option>
    </select>
    @else
    <select name="kepatuhanku" id="kepatuhanku" class="form-control" onchange="kepatuhan();" required >
    <option value="" selected></option>
    <option value="Patuh">Patuh</option>
    <option value="Tidak Patuh">Tidak Patuh</option>
    </select>
    @endif
    @endforeach
  </div>
 <div>
 <input type="hidden" class="form-control"  name='status_tahap2' id="status_tahap2">
 <br>
 <input class="btn btn-primary" type="submit" value="Update">
 <a href='/regisbu'><button type="button" class="btn btn-danger" >Kembali</button></a>
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