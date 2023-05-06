<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Master BU Terdaftar</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
     <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.css"/>
     <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
      <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
<div class="container">
  <div class="card">
    <div class="card-header bg-success text-white">Form Registrasi Badan Usaha Baru</div>
    <div class="card-body">
<form action='/masterregis/inputmasterregis' method='post'>
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Badan Usaha</label>
    <input type="text" class="form-control"  name='nama_bu_regis'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Alamat Badan Usaha</label>
    <input type="text" class="form-control" name='alamat_bu_regis' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Kontak Badan Usaha</label>
    <input type="text" class="form-control"  name='notelp_bu_regis'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Penanggung Jawab</label>
    <input type="text" class="form-control" name='PJ_regis' >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Kontak Penanggung Jawab</label>
    <input type="text" class="form-control"  name='notelp_PJ_regis'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama RO Registrasi</label>
    <input type="text" class="form-control" name='nama_RO_regis' >
  </div>  

  <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah Karyawan</label>
    <input type="text" class="form-control" name='jumlah_karyawan_regis' >
  </div>  
  <div class="form-group">  <div class="form-group">
    <label for="exampleFormControlInput1">Titik Lokasi Badan Usaha</label>
    <input type="hidden" class="form-control" name='longitude_regis' id='longitude_regis' >
    <input type="hidden" class="form-control" name='latitude_regis' id='latitude_regis'>
  </div>  
  <div id="map" class="center-block" style="width: 100%; height: 400px;"></div>
  <input type="hidden" class="form-control"  name='status_tahapcanvasing' value='Belum Terkonfirmasi'>
  <input type="hidden" class="form-control"  name='status_tahap1' value='Belum Terkonfirmasi'>
  <input type="hidden" class="form-control"  name='status_tahap2' value='Belum Terkonfirmasi'>
  <input type="hidden" class="form-control"  name='status_tahap3' value='Belum Terkonfirmasi'>
  <input type="hidden" class="form-control"  name='status_tahap4' value='Belum Terkonfirmasi'>
  <input type="hidden" class="form-control"  name='status_tahap5' value='Belum Terkonfirmasi'>
  <input type="hidden" class="form-control"  name='status_tahapupayalain' value='Belum Terkonfirmasi'>
  <input type="hidden" class="form-control"  name='status_kepatuhan' value='Tidak Patuh'>
  <br>
 <input class="btn btn-primary" type="submit" value="Tambah">
 <a href='/masterregis'><button type="button" class="btn btn-danger" >Kembali</button></a>
</div>
</form>
 </body>
 </div>
</div>
</div>
</div>
 <script>
var map = L.map('map').setView([51.505, -0.09], 13);
var icon = new L.Icon.Default();
icon.options.shadowSize = [0,0];
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
map.setView(new L.LatLng(53.4053, -6.3784), 13); 
var popup = L.popup();
let marker = {};
function onMapClick(e) {
let latitude = e.latlng.lat.toString().substring(0,15);  
let longitude = e.latlng.lng.toString().substring(0,15); 
if (marker != undefined)
{
map.removeLayer(marker)
}
document.querySelector("#longitude_regis").value = longitude;
document.querySelector("#latitude_regis").value = latitude;
popup
  .setLatLng([latitude,longitude])
  .setContent("You clicked the map at " + latitude+'-'+longitude)
  .openOn(map);
}
map.on('click', onMapClick);
const provider = new window.GeoSearch.OpenStreetMapProvider();
const search = new GeoSearch.GeoSearchControl({
provider: provider,
style: 'bar',
updateMap: true,
autoClose: true,
}); // Include the search box with usefull params. Autoclose and updateMap in my case. Provider is a compulsory parameter.
L.marker([51.0, -0.09]).addTo(map).bindPopup('A pretty CSS3 popup.<br> Easily customizable.'); //Creates a marker at [latitude, longitude] coordinates.
map.addControl(search);

</script>
</html>