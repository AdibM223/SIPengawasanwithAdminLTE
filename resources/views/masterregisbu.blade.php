@extends('layout.admin');

@section('content')
<style>
  .my-custom-scrollbar {
position: relative;
height: 600px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6"> -->
          <table style='width: 100%;'>
  <tr>
    <td style='width: 20%;'>
    <a href='/masterregis/tambahregis'><button type="button" class="btn btn-success" >tambah</button></a>
    </td>
    <td style='width: 50%;'></td>
    <form action="/masterregis/cari" method="GET" >
    <td style='width: 30%; '>
    <table>
      <tr>
          <td style='width: 70%; ' >
          <input type="text" name="cari" placeholder="Cari Data .." value="{{ old('cari') }}" class="form-control">
          </td>
          <td style='width: 30%; '>
          <input type="submit" value="CARI" class="btn btn-primary">
          </td>
          </tr>
          </table>
    </td>
    </form>
  </tr>
  
  </table>
  <div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table  table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Nomor Registrasi</th>
      <th scope="col">Nama Badan Usaha</th>
      <th scope="col">Alamat Badan Usaha</th>
      <th scope="col">Notelp Badan Usaha</th>
      <th scope="col">Penanggung Jawab</th>
      <th scope="col">Notelp Penanggung Jawab</th>
      <th scope="col">Nama RO</th>
      <th scope="col">Jumlah Karyawan</th>
      <th scope="col">Titik Lokasi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($masterregisbu as $r)
			<td>{{ $r->nomorregis }}</td>
			<td>{{ $r->nama_bu_regis }}</td>
			<td>{{ $r->alamat_bu_regis }}</td>
            <td>{{ $r->notelp_bu_regis }}</td>
			<td>{{ $r->PJ_regis }}</td>
            <td>{{ $r->notelp_PJ_regis }}</td>
			<td>{{ $r->nama_RO_regis }}</td>
			<td>{{ $r->jumlah_karyawan_regis }}</td>
            <td><a href="/mapsregis/{{$r->nomorregis}}?lat={{$r -> latitude_regis}}&lng={{$r -> longitude_regis}}&zoom=13" target='_blank'>Lokasi Badan Usaha</a></a></td>
			<td>
      <a href='/masterregis/editmasterregis/{{$r->nomorregis}}'><button type="button" class="btn btn-warning" >Update</button></a>
      <a href='/masterregis/deletemasterregis/{{ $r->nomorregis }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
        @endforeach

  </tbody>
</table>
<ul class="pagination">
<li class="page-item"><a class="page-link" href="{{ $masterregisbu->previousPageUrl() }}">Previous</a></li>
        <li class="page-item"><a class="page-link" href="{{ $masterregisbu->nextPageUrl() }}">Next</a></li>       
    </ul>
</div>

</div></div></div></div>


<!-- </div> -->
@endsection