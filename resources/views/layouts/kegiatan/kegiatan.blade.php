
@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kegiatan
        <small>UKM Pencak IAIN</small>
      </h1>
    </section>

    <!-- @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Diinput!
    </div>
    @endif
    
    @if(session('hapus'))
    <div class="alert alert-danger" role="alert">
      Data Berhasil Dihapus!
    </div>
    @endif -->
    
    <!-- Main content -->
    <section class="content ml-2">
          <div class="box float-left">

            <!-- /.box-header -->
            <div class="box-body">
            
            <!-- tambah form -->
            <div class="pull-right">
            <button type="button" class="btn btn-success float-right btn-sm" data-toggle="modal" data-target="#kegiatanModal"><i class="fa fa-plus"></i></button>
            </div>

            <!-- Kegiatan Modal -->
<div class="modal fade" id="kegiatanModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Kegiatan</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
      <form action="/admin/kegiatan/tambah" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

        <div class="form-group">
          <label for="nama_kegiatan">Nama Kegiatan </label>
          <input name="nama_kegiatan" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('') placeholder="Masukkan Nama Kegaiatan">
        </div>

        <div class="form-group">
          <label for="alamat">Deskripsi Kegiatan</label>
          <textarea style="resize:none" name="deskripsi" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('') rows="4"></textarea>
        </div>

        <div class="form-group">
          <label>Tanggal Kegiatan :</label>
            <div class="input-group col-xs-3">
              <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              <input name="tanggal" type="date" id="date" class="form-control" placeholder="2019-01-01">
          </div>
        </div>

        <div class="form-group">
          <label for="tempat"> Tempat Kegiatan </label>
          <input name="tempat" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('') placeholder="Masukkan Tempat Kegiatan">
        </div>

              
        <div class="form-group">
            <label for="exampleInputFile">Foto Kegiatan</label>
            <img id="foto_preview" class="profile-user-img img-responsive" style="height: 150px; width: 150px; display: block;">
            <input name="foto" type="file" id="foto">
            <label class="custom-file-label" for="foto"><small>*max ukuran foto 2MB</small></label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>


            <!-- <div class="pull-right">
            <form class="form-inline float-right" action="/anggota/cari" method="GET">
              <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Search" aria-label="Search" value="{{ old('cari') }}">
              <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" value="cari">Search</button>
            </form>
            </div>
             -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal Kegiatan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                @foreach($data_kegiatan as $kegiatan)
                <tbody>
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $kegiatan -> nama_kegiatan }}</td>
                  <td>{{ $kegiatan->tanggal }}</td>
                  <td><a href="/admin/kegiatan/edit/{{ $kegiatan -> id_kegiatan }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <a href="/admin/kegiatan/hapus/{{ $kegiatan -> id_kegiatan }}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      <a href="/admin/kegiatan/info/{{ $kegiatan -> id_kegiatan }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a></td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  
  @endsection
