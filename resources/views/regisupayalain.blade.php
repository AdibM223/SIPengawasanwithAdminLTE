@extends('layout.admin');
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
<table class="table  table-striped-columns">
@foreach($noregis as $r)
<a href='/regisbu/tambahupayalain/{{$r->nomorregis}}'><button type="button" class="btn btn-success" >tambah</button></a>
@endforeach
<a href='/regisbu'><button type="button" class="btn btn-danger" >Kembali</button></a>
<thead>
    <tr>
      <th scope="col">Nomor Registrasi</th>
      <th scope="col">Tanggal Upaya Lain</th>
      <th scope="col">Kegiatan Upaya Lain</th>
      <th scope="col">Hasil Upaya Lain</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($upayalain as $r)
			<td>{{ $r->nomorregis }}</td>
      <td>{{ $r->tgl_upayalain }}</td>
      <td>{{ $r->kegiatan_upayalain }}</td>
      <td>{{ $r->hasil_upayalain }}</td>
      <td>
      <a href='/regisbu/deleteupayalain/{{ $r->nomorregis }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
@endsection