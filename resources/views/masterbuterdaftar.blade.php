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
      <a href='/masterbu/tambahbu'><button type="button" class="btn btn-success" >tambah</button></a>
    </td>
    <td style='width: 50%;'></td>
    <form action="/masterbu/cari" method="GET" >
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
  <br><br>
  <div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table  table-striped-columns">

  <thead>
    <tr>
      <th scope="col">Kode Badan Usaha</th>
      <th scope="col">Nama Badan Usaha</th>
      <th scope="col">Alamat Badan Usaha</th>
      <th scope="col">Nama Pimpinan</th>
      <th scope="col">Notelp Pimpinan</th>
      <th scope="col">PIC</th>
      <th scope="col">Notelp PIC</th>
      <th scope="col">Nama RO</th>
      <th scope="col">Titik Lokasi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($masterbuterdaftar as $r)
			<td>{{ $r->kode_bu }}</td>
			<td>{{ $r->nama_bu }}</td>
			<td>{{ $r->alamat_bu }}</td>
            <td>{{ $r->nama_pimpinan }}</td>
			<td>{{ $r->notelp_pimpinan }}</td>
			<td>{{ $r->PIC }}</td>
            <td>{{ $r->notelp_PIC }}</td>
			<td>{{ $r->nama_RO_bu }}</td>
			<td><a href="/mapsbu/{{$r->kode_bu}}?lat={{$r -> latitude_bu}}&lng={{$r -> longitude_bu}}&zoom=13" target='_blank'>Lokasi Badan Usaha</a></td>
			<td>
      <a href='/masterbu/editmasterbu/{{$r->kode_bu}}'><button type="button" class="btn btn-warning" >Update</button></a>
      <a href='/deletemasterbu/{{ $r->kode_bu }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
        @endforeach
        
  </tbody>
</table>
<ul class="pagination">
<li class="page-item"><a class="page-link" href="{{ $masterbuterdaftar->previousPageUrl() }}">Previous</a></li>
        <li class="page-item"><a class="page-link" href="{{ $masterbuterdaftar->nextPageUrl() }}">Next</a></li>       
    </ul>
  </div>

</div></div></div></div>
<!-- </div> -->
@endsection