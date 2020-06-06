@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Data Alumni
      </h1>
    </section>

    <!-- Main content -->
    <section class="content ml-3">
      
    <div class="row">
        <div class="col-md-5">
          <div class="box float-left mx-auto">
            <div class="box-header">
              <h3 class="box-title">Info Lengkap</h3>
            </div>

            
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$data_anggota->file)}}" alt="User profile picture">
              <div class="mt-5">
              <h3 class="profile-username text-center">{{ $data_anggota -> nama_anggota }}</h3>
                <p class="text-muted text-center">{{ $data_anggota -> status }}</p>
                <p class="text-muted text-center">{{ $data_anggota -> angkatan }}</p>
              <ul class="list-group list-group-unbordered ">
              
                <li class="list-group-item">
                 <b>Alamat</b> <div class="pull-right">{{ $data_anggota -> alamat }}</div>
                </li>

                <li class="list-group-item">
                  <b>No Telp</b> <div class="pull-right">{{ $data_anggota -> no_hp }}</div>
                </li>
                <li class="list-group-item">
                  <b>Agama</b> <div class="pull-right">{{$data_anggota -> agama}}</div>
                </li>
                <li class="list-group-item">
                  <b>Scan Kta</b> <a class="pull-right" href="{{url('/data_kta/'.$data_anggota->kta)}}">{{$data_anggota -> kta}}</a>
                </li>
                <li class="list-group-item">
                  <b>File Foto</b> <a class="pull-right" href="{{url('/data_file/'.$data_anggota->file)}}">{{$data_anggota -> file}}</a>
                </li>
              </ul>
              </div>
              
              <a href="/admin/alumni" class="btn btn-primary btn-block"><b>Kembali</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </section>

          
  @endsection
