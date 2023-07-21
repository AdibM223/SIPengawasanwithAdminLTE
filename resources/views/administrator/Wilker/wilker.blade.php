
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
<a href='/useradmin/wilker/tambahwilker'><button type="button" class="btn btn-success" >Add New</button></a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Wilayah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($wilkerku as $r)
        <td>{{ $r->id }}</td>
			  <td>{{ $r->namawil }}</td>
			  <td>
        <a href='/useradmin/wilker/updatewilker/{{$r->id}}'><button type="button" class="btn btn-warning" >Update</button></a>
        <a href='/useradmin/wilker/deletewilker/{{ $r->id }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			  </td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection