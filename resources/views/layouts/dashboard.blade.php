@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Selamat Datang
        @if(Auth::user()->level == 'superadmin')
        <small>Super Admin!</small>
        @else
        <small>Admin!</small>
        @endif
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Assalamualaikum</h3>
        </div>
        <div class="box-body">

        <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$data_anggota->count()}}</h3>

              <p>Total Seluruh Anggota</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$data_anggota->where('status', 'Aktif')->count()}}</h3>

              <p>Total Anggota Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$data_anggota->where('status', 'Alumni')->count()}}</h3>

              <p>Total Alumni</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$data_anggota->where('jabatan', true)->count()}}</h3>

              <p>Total Pengurus</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            </div>
        </div>

        @if(Auth::user()->level == 'superadmin')
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green center-block">
            <div class="inner">
              <h3>{{$data_user->where('email', true)->count()}}</h3>

              <p>Total Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            </div>
        </div>
        @endif

          
</div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Semoga Hari anda menyenangkan
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection