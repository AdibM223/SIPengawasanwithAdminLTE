@extends('layout.admin');
@section('content')
@include('sweetalert::alert')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6"> -->
<table class="table  table-striped-columns">
<a href='/ajuansertif/tambahajuan'><button type="button" class="btn btn-success" >tambah</button></a>
  <thead>
    <tr>
      <th scope="col">Kode Badan Usaha</th>
      <th scope="col">Nomor Surat</th>
      <th scope="col">Tanggal Surat</th>
      <th scope="col">Dokumen Surat</th>
      <th scope="col">Detail Penyerahan</th>
      <th scope="col">Aksi</th>
      <th scope="col">Tanda Terima</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($ajuansertif as $r)
			<td>{{ $r->kode_bu }}</td>
			<td>{{ $r->no_surat }}</td>
			<td>{{ $r->tgl_surat }}</td>
      <td>{{ $r->nama_file }}</td>
      <td><a href='/ajuansertif/penyerahan/{{$r->kode_bu}}'> Detail Penyerahan</a></td>
			<td>
      <a href='/ajuansertif/editajuan/{{$r->kode_bu}}'><button type="button" class="btn btn-warning" >Pengajuan</button></a>
      <a href='/ajuansertif/deleteajuan/{{ $r->kode_bu }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
      <td>
      <a href='/ajuansertif/cetaktandaajuan/{{ $r->kode_bu }}' target="__blank"><button  type="button" class="btn btn-primary" >Cetak Tanda Terima</button></a>
      </td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection