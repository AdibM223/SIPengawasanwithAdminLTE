@extends('layout.admin');
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
<table class="table  table-striped-columns">
@foreach($noregis as $r)
<a href='/regisbu/tambahcanvasing/{{$r->nomorregis}}'><button type="button" class="btn btn-success" >Tambah</button></a>
@endforeach
<a href='/regisbu'><button type="button" class="btn btn-danger" >Kembali</button></a>
<thead>
    <tr>
      <th scope="col">Nomor Registrasi</th>
      <th scope="col">Metode Canvasing</th>
      <th scope="col">Tanggal Canvasing</th>
      <th scope="col">Hasil Canvasing</th>
      <th scope="col">Jumlah Potensi Pekerja</th>
      <th scope="col">NJumah Potensi Keluarga</th>
      <th scope="col">Tindak Lanjut</th>
      <th scope="col">Hasil Rekrutmen</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($canvas as $r)
			<td>{{ $r->nomorregis }}</td>
			<td>{{ $r->metode_canvasing }}</td>
			<td>{{ $r->tanggal_canvasing }}</td>
            <td>{{ $r->hasil_canvasing }}</td>
			<td>{{ $r->jumlah_potensi_pekerja }}</td>
            <td>{{ $r->jumlah_potensi_keluarga }}</td>
			<td>{{ $r->tindak_lanjut }}</td>
			<td>{{ $r->hasil_rekrutmen }}</td>
			<td>
      <a href='/regisbu/deletecanvasing/{{ $r->nomorregis }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
@endsection