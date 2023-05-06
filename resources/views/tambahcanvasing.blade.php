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
    <div class="card-header bg-primary text-white">Form Tambah Canvasing Baru</div>
    <div class="card-body">
<form action='/regisbu/inputcanvasing' method='post'>
{{ csrf_field() }}
<div class="form-group">
@foreach ($regiscanvas as $p)
    <input type="hidden" class="form-control"  name='nomorregis' value='{{$p->nomorregis}}'>
    <input type="hidden" class="form-control"  name='nama_bu_regis' value='{{$p->nama_bu_regis}}'>
@endforeach
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal Canvasing</label>
    <input type="date" class="form-control" name='tanggal_canvasing' required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Metode Canvasing</label>
    <select name='metode_canvasing' class="form-control" required>
      <option>Telemarketing</option>
      <option>Canvasing</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Hasil Canvasing</label>
    <select name='hasil_canvasing' id='hasil_canvasing' class="form-control" onchange="munculhavas();" required>
    <option value=''>
          </option selected>   
    <option value="Ditemukan">Ditemukan</option>
      <option value="Tidak Ditemukan" >Tidak Ditemukan</option>
    </select>
  </div>
  <div id='havas' style='display:none'>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Jumlah Potensi Pekerja</label>
        <input type="text" class="form-control" id='jumpopes' name='jumlah_potensi_pekerja' >
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Jumlah Potensi Keluarga</label>
        <input type="text" class="form-control" id='jumpokel' name='jumlah_potensi_keluarga' >
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Tindak Lanjut</label>
        <select name='tindak_lanjut' id="tindak_lanjut" class="form-control" onchange="munculhakrut();" >
        <option value=''>
          </option selected>  
          <option value='-'>
          </option selected>  
        <option value="Potensial">Potensial</option>
          <option value="Tidak Potensial" >Tidak Potensial</option>
        </select>
      </div>
      <div class="form-group" id='hakrut' style='display:none' >
        <label for="exampleFormControlSelect1">Hasil Rekrutmen</label>
        <select name='hasil_rekrutmen' id='hasil_rekrutmen' class="form-control"  onchange='rubahstatus();'>
        <option value=''>
          </option >   
          <option value='-'>
          </option selected>  
        <option value='Daftar'>Daftar
          </option>
          <option value='Tidak Daftar'>Tidak Daftar
          </option>
        </select>
      </div>
    <div>
  </div>
  <input type="hidden" class="form-control" id='statuscanvas' name='statuscanvas' >
  <input type="hidden" class="form-control" id='statuskepatuhan' name='statuskepatuhan' >
</div>
<br>
<input class="btn btn-primary" type="submit" value="Tambah">
<a href='/regisbu'><button type="button" class="btn btn-danger" >Kembali</button></a>
</form>
</div>
</div>
</div>
</div>
 </body>
 <script>
  function munculhavas() {
    var selectBox = document.getElementById("hasil_canvasing").value;
    if (selectBox == "Ditemukan") {
      document.getElementById('havas').style.display = 'block';
      document.getElementById("jumpopes").required = 'true';
      document.getElementById("jumpokel").required = 'true';
      document.getElementById("tindak_lanjut").required = 'true';
    } else if (selectBox == "Tidak Ditemukan"){
      document.getElementById('havas').style.display = 'none';
      document.getElementById("jumpopes").value = '-';
      document.getElementById("jumpokel").value = '-';
      document.getElementById("tindak_lanjut").value = '-';
      document.getElementById('hakrut').style.display = 'none';
      document.getElementById('hasil_rekrutmen').value = '-';
    } else
    {
      document.getElementById('havas').style.display = 'none';
      document.getElementById("jumpopes").value = '';
      document.getElementById("jumpokel").value = '';
      document.getElementById("tindak_lanjut").value = '';
      document.getElementById('hakrut').style.display = 'none';
      document.getElementById('hasil_rekrutmen').value = '';
    }
  }
  function rubahstatus(){
    var selectBox = document.getElementById("hasil_rekrutmen").value;
    if (selectBox=='Daftar') {
      document.getElementById("statuscanvas").value = 'Patuh';
      document.getElementById("statuskepatuhan").value = 'Patuh';
    } else if (selectBox=='Tidak Daftar'){
      document.getElementById("statuscanvas").value = 'Tidak Patuh';
      document.getElementById("statuskepatuhan").value = 'Tidak Patuh';
    }
  }
  function munculhakrut() {
var selectBox = document.getElementById("tindak_lanjut").value;
if (selectBox == "Potensial") {
  document.getElementById('hakrut').style.display = 'block';
  document.getElementById('hasil_rekrutmen').required = 'true';
} else if (selectBox == "Tidak Potensial"){
  document.getElementById('hakrut').style.display = 'none';
  document.getElementById('hasil_rekrutmen').value = '-';
}else
{
  document.getElementById('hakrut').style.display = 'none';
  document.getElementById('hasil_rekrutmen').value = '-';
}
}
 </script>
</html>