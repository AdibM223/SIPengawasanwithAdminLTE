@extends('layout.admin');

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6"> -->
<table class="table  table-striped-columns">
<a href='/ajuansertif'><button type="button" class="btn btn-danger" >Kembali</button></a>
  <thead>
    <tr>
      <th scope="col">Kode Badan Usaha</th>
      <th scope="col">Nomer Sertifikat</th>
      <th scope="col">Tanggal Cetak</th>
      <th scope="col">Periode Sertifikat</th>
      <th scope="col">Jumlah Peserta</th>
      <th scope="col">Jumlah ISAT</th>
      <th scope="col">Tanggal Diserahkan</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($ajuansertif as $r)
			<td>{{ $r->kode_bu }}</td>
			<td>{{ $r->nomor_sertif }}</td>
            <td>{{ $r->tgl_cetak }}</td>
			<td>{{ $r->periode_sertif }}</td>
			<td>{{ $r->jumlah_peserta }}</td>
            <td>{{ $r->jumlah_ISAT }}</td>
            <td>{{ $r->tanggal_diserahkan }}</td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection