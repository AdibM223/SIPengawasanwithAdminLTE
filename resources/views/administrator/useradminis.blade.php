@extends('layout.adminuser');
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6"> -->
<table class="table  table-striped-columns">
<a href='/useradmin/tambahuser'><button type="button" class="btn btn-success" >tambah</button></a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama User</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Role User</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($userku as $r)
        <td>{{ $r->id }}</td>
			<td>{{ $r->name }}</td>
			<td>{{ $r->email }}</td>
			<td>{{ $r->password }}</td>
      <td>{{ $r->role }}</td>
			<td>
      <a href='/useradmin/edituser/{{$r->id}}'><button type="button" class="btn btn-warning" >Update</button></a>
      <a href='/useradmin/deleteuser/{{ $r->id }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
        @endforeach
  </tbody>
</table>
</div></div></div></div>
<!-- </div> -->
@endsection