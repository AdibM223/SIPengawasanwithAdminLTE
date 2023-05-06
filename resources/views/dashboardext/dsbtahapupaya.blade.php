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
      <th scope="col">Tanggal Upaya Lain</th>
      <th scope="col">Kegiatan Upaya Lain</th>
      <th scope="col">Hasil Upaya Lain</th>

    </tr>
  </thead>
  <tbody>
  <tr>

        @foreach($userku as $r)
			<td>{{ $r->nomorregis }}</td>
      <td>{{ $r->tgl_upayalain }}</td>
      <td>{{ $r->kegiatan_upayalain }}</td>
      <td>{{ $r->hasil_upayalain }}</td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection