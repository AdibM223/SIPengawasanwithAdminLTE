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
    <div class="card-header bg-primary text-white">Form Update Penyerahan Ajuan</div>
    <div class="card-body">
<form action='/ajuansertif/updateajuan' method='post'>
{{ csrf_field() }}
@foreach ($ajuansertif as $p)
<div class="form-group">
    <label for="exampleFormControlSelect1"> Kode Registrasi Badan Usaha</label>
    <input type="text" class="form-control"  name='kode_bu' value='{{$p->kode_bu}}' >
  </div>

  @endforeach
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nomor Sertfifikat</label>
    <input type="text" class="form-control" name='nomor_sertif' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tanggal Cetak</label>
    <input type="date" class="form-control" name='tgl_cetak' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Periode Sertifikat</label>
    <input type="text" class="form-control" name='periode_sertif' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jumlah Peserta</label>
    <input type="text" class="form-control" name='jumlah_peserta' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jumlah ISAT</label>
    <input type="text" class="form-control" name='jumlah_ISAT' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tanggal Diserahkan</label>
    <input type="date" class="form-control" name='tanggal_diserahkan' >
  </div>
 <div>
  <br>
 <input class="btn btn-primary" type="submit" value="Update">
 <a href='/'><button type="button" class="btn btn-danger" >Kembali</button></a>
</div>

</form>

</div>
</div>
</div>
</div>
 </body>
</html>