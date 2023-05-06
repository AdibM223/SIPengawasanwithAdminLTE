

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
      <th scope="col">Nomor Regis</th>
      <th scope="col">Nama Badan Usaha</th>
      <th scope="col">Tanggal Pemeriksaan</th>
      <th scope="col">Nama Pemeriksa</th>
      <th scope="col">Hasil Pemeriksaan</th>
      <th scope="col">Tanggal SPHP</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($userku as $r)
        <td>{{ $r->nomorregis }}</td>
			<td>{{ $r->nama_bu_regis }}</td>
			<td>{{ $r->tgl_pemeriksaan }}</td>
			<td>{{ $r->nama_pemeriksa }}</td>
            <td>{{ $r->hasil_pemeriksaan }}</td>
            <td>{{ $r->tgl_SPHP }}</td>
            <td>{{ $r->status_tahap2 }}</td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection