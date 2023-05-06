@extends('layout.admin');

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard v2</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 ">
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Master Badan Usaha</span>
                <span class="info-box-number">
                  {{$countmasterbu}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Master Registrasi Badan Usaha</span>
                <span class="info-box-number">
                 {{$countmasterregis}}
                </span>
              </div>             
             <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 ">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pengajuan Sertifikat Badan Usaha</span>
                <span class="info-box-number">{{$countajuan}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 ">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registrasi Badan Usaha</span>
                <span class="info-box-number">{{$countregis}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">REKAP TAHAP REGISTRASI BADAN USAHA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard v2</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <span class="info-box-text" style='align:center'>Tahap Canvasing</span>
                <h3>{{$counttahapcanvastotal}}</h3>
                <span class="info-box-number">Patuh {{$counttahapcanvaspth}}</span><br>
                <span class="info-box-number">Tidak Patuh {{$counttahapcanvastdk}}</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/tahapcanvas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <span class="info-box-text" style='align:center'>Tahap 1</span>
                <h3>{{$counttahap1total}}</h3>
                <span class="info-box-number">Patuh {{$counttahap1pth}}</span><br>
                <span class="info-box-number">Tidak Patuh {{$counttahap1tdk}}</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/tahap1" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <span class="info-box-text" style='align:center'>Tahap 2</span>
                <h3>{{$counttahap2total}}</h3>
                <span class="info-box-number">Patuh {{$counttahap2pth}}</span><br>
                <span class="info-box-number">Tidak Patuh {{$counttahap2tdk}}</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/tahap2" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <span class="info-box-text" style='align:center'>Tahap 3</span>
                <h3>{{$counttahap3total}}</h3>
                <span class="info-box-number">Patuh {{$counttahap3pth}}</span><br>
                <span class="info-box-number">Tidak Patuh {{$counttahap3tdk}}</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/tahap3" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <span class="info-box-text" style='align:center'>Tahap 4</span>
                <h3>{{$counttahap4total}}</h3>
                <span class="info-box-number">Patuh {{$counttahap4pth}}</span><br>
                <span class="info-box-number">Tidak Patuh {{$counttahap4tdk}}</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/tahap4" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <span class="info-box-text" style='align:center'>Tahap 5</span>
                <h3>{{$counttahap5total}}</h3>
                <span class="info-box-number">Patuh {{$counttahap5pth}}</span><br>
                <span class="info-box-number">Tidak Patuh {{$counttahap5tdk}}</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/tahap5" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <span class="info-box-text" style='align:center'>Tahap Upaya Lain</span>
                <h3>{{$counttahapupayalaintotal}}</h3>
                <span class="info-box-number">Patuh {{$counttahapupayalainpth}}</span><br>
                <span class="info-box-number">Tidak Patuh {{$counttahapupayalaintdk}}</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/tahapupaya" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
  </div>
  @endsection