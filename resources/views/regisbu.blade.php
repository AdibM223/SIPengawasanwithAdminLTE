@extends('layout.admin');
@section('content')
@include('sweetalert::alert')
<style>
  .my-custom-scrollbar {
position: relative;
height: 600px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table  table-striped-columns">
<a href="/regisbu/export_excel" class="btn btn-warning " target="_blank">EXPORT EXCEL</a>
  <thead>
    <tr>
      <th scope="col">Nomor Registrasi</th>
      <th scope="col">Nama Badan Usaha</th>
      <th scope="col">Jumlah Karyawan</th>
      <th scope="col">Detail Canvasing</th>

      <th scope="col">Tahap 1</th>
      <th scope="col">Tahap 2</th>
      <th scope="col">Tahap 3</th>
      <th scope="col">Tahap 4</th>
      <th scope="col">Tahap 5</th>
      <th scope="col">Upaya Lain</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($regisbu as $r)
			<td>{{ $r->nomorregis }}</td>
			<td>{{ $r->nama_bu_regis }}</td>
			<td>{{ $r->jumlah_karyawan_regis }}</td>
      @if ($r->status_kepatuhan  == 'Patuh')
      <td><a href='#'> Detail Canvasing</a></td>
      @else
      <td><a href='/regisbu/datacanvasing/{{$r->nomorregis}}'> Detail Canvasing</a>
      @endif
			<td>
      @if ($r->status_kepatuhan  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" >TAHAP 1</button></a>
      @else
      @if ($r->status_tahap1 == 'Tidak Patuh')
      <a href='#'><button type="button" class="btn btn-info" disabled>TAHAP 1</button></a>
      @elseif ($r->status_tahap1 == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" disabled>TAHAP 1</button></a>
      @else 
      @if ($r->status_tahapcanvasing  == '')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 1</button></a> 
        @elseif ($r->status_tahapcanvasing  == 'Belum Terkonfirmasi')
          <a href='#'><button type="button" class="btn btn-danger" >TAHAP 1</button></a> 
        @elseif ($r->status_tahapcanvasing == 'Tidak Patuh')
          <a href='/regisbu/edittahap1/{{$r->nomorregis}}'><button type="button" class="btn btn-warning" >TAHAP 1</button></a> 
          @elseif ($r->status_tahapcanvasing  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" >TAHAP 1</button></a>
        @endif
        @endif
        @endif
			</td>
      <td>
      @if ($r->status_kepatuhan  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" >TAHAP 2</button></a>
      @else
      @if ($r->status_tahap1  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 2</button></a> 
      @else
      @if ($r->status_tahap2 == 'Tidak Patuh')
      <a href='#'><button type="button" class="btn btn-info" disabled>TAHAP 2</button></a>
      @elseif ($r->status_tahap2 == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" disabled>TAHAP 2</button></a>
      @else
      @if ($r->status_tahap1  == '')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 2</button></a> 
      @elseif ($r->status_tahap1  == 'Belum Terkonfirmasi')
        <a href='#'><button type="button" class="btn btn-danger" >TAHAP 2</button></a> 
      @elseif ($r->status_tahap1 == 'Tidak Patuh')
        <a href='/regisbu/edittahap2/{{$r->nomorregis}}'><button type="button" class="btn btn-warning" >TAHAP 2</button></a>
      @endif
        @endif
        @endif
        @endif 
      </td>
      <td>
      @if ($r->status_kepatuhan  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" >TAHAP 3</button></a>
      @else
      @if ($r->status_tahap2  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 3</button></a> 
      @else
      @if ($r->status_tahap3 == 'Tidak Patuh')
      <a href='#'><button type="button" class="btn btn-info" disabled>TAHAP 3</button></a>
      @elseif ($r->status_tahap3 == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" disabled>TAHAP 3</button></a>
      @else
      @if ($r->status_tahap2  == '')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 3</button></a> 
      @elseif ($r->status_tahap2  == 'Belum Terkonfirmasi')
        <a href='#'><button type="button" class="btn btn-danger" >TAHAP 3</button></a> 
      @elseif ($r->status_tahap2 == 'Tidak Patuh')
      <a href='/regisbu/edittahap3/{{ $r->nomorregis }}'><button type="button" class="btn btn-warning" >TAHAP 3</button></a>  
        @endif
        @endif
        @endif
        @endif
      </td>
      <td>
      @if ($r->status_kepatuhan  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" >TAHAP 4</button></a>
      @else
      @if ($r->status_tahap3  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 4</button></a> 
      @else
      @if ($r->status_tahap4 == 'Tidak Patuh')
      <a href='#'><button type="button" class="btn btn-info" disabled>TAHAP 4</button></a>
      @elseif ($r->status_tahap4 == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" disabled>TAHAP 4</button></a>
      @else
      @if ($r->status_tahap3  == '')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 4</button></a> 
      @elseif ($r->status_tahap3  == 'Belum Terkonfirmasi')
        <a href='#'><button type="button" class="btn btn-danger" >TAHAP 4</button></a> 
      @elseif ($r->status_tahap3 == 'Tidak Patuh')
      <a href='/regisbu/edittahap4/{{$r->nomorregis}}'><button type="button" class="btn btn-warning" >TAHAP 4</button></a></td>      
        @endif
        @endif
        @endif
        @endif
      <td>
      @if ($r->status_kepatuhan  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" >TAHAP 5</button></a>
      @else
      @if ($r->status_tahap4  == 'Patuh')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 5</button></a> 
      @else
      @if ($r->status_tahap5 == 'Tidak Patuh')
      <a href='#'><button type="button" class="btn btn-info" disabled>TAHAP 5</button></a>
      @elseif ($r->status_tahap5 == 'Patuh')
      <a href='#'><button type="button" class="btn btn-success" disabled>TAHAP 5</button></a>
      @else
      @if ($r->status_tahap4  == '')
      <a href='#'><button type="button" class="btn btn-danger" >TAHAP 5</button></a> 
      @elseif ($r->status_tahap4  == 'Belum Terkonfirmasi')
        <a href='#'><button type="button" class="btn btn-danger" >TAHAP 5</button></a> 
      @elseif ($r->status_tahap4 == 'Tidak Patuh') 
      <a href='/regisbu/edittahap5/{{ $r->nomorregis }}'><button type="button" class="btn btn-warning" >TAHAP 5</button></a>
      @endif
        @endif
        @endif
        @endif
      </td>
      @if ($r->status_kepatuhan  == 'Patuh')
      <td><a href='#'> Detail Upaya Lain</a></td>
      @else
      <td><a href='/regisbu/dataupayalain/{{$r->nomorregis}}'> Detail Upaya Lain</a></td>
      @endif
		</tr>
    @endforeach
  </tbody>
</table>
<ul class="pagination">
<li class="page-item"><a class="page-link" href="{{ $regisbu->previousPageUrl() }}">Previous</a></li>
        <li class="page-item"><a class="page-link" href="{{ $regisbu->nextPageUrl() }}">Next</a></li>       
    </ul>
</div>



</div></div></div></div>
@endsection