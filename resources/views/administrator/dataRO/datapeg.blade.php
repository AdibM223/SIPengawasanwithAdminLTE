@extends('layout.adminuser');
@section('content')
@include('sweetalert::alert')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6"> -->
<table class="table  table-striped-columns">
<a href='/useradmin/datapeg/tambahdatapeg'><button type="button" class="btn btn-success" >Add New</button></a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama RO</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($datapegku as $r)
        <td>{{ $r->id }}</td>
        <td>{{ $r->nip }}</td>
			  <td>{{ $r->namapeg }}</td>
        <td>{{ $r->kontak }}</td>
			  <td>
        <a href='/useradmin/datapeg/updatedatapeg/{{$r->id}}'><button type="button" class="btn btn-warning" >Update</button></a>
        <a href='/useradmin/datapeg/deletedatapeg/{{ $r->id }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			  </td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection