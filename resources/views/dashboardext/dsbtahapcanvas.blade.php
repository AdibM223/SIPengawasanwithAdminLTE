@extends('layout.admin');

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6"> -->
<table class="table  table-striped-columns">

<a href='/dashboard'><button type="button" class="btn btn-danger" >Kembali</button></a>
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

    </tr>
  </thead>
  <tbody>
  <tr>

        @foreach($userku as $r)
			<td>{{ $r->nomorregis }}</td>
			<td>{{ $r->metode_canvasing }}</td>
			<td>{{ $r->tanggal_canvasing }}</td>
            <td>{{ $r->hasil_canvasing }}</td>
			<td>{{ $r->jumlah_potensi_pekerja }}</td>
            <td>{{ $r->jumlah_potensi_keluarga }}</td>
			<td>{{ $r->tindak_lanjut }}</td>
			<td>{{ $r->hasil_rekrutmen }}</td>

			
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection