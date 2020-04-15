@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Edit Data Kegiatan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
            <!-- /.box-header -->
              <div class="box-body pad">
                <div class="container">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/admin/kegiatan/update/{{ $data_kegiatan->id_kegiatan }}" enctype="multipart/form-data">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

      <div class="form-group">
          <label for="nama_kegiatan">Nama Kegiatan </label>
            <div class="input-group col-xs-3">
              <input name="nama_kegiatan" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" value="{{ $data_kegiatan -> nama_kegiatan }}">
            </div>
        </div>

        <div class="form-group">
          <label for="alamat">Deskripsi Kegiatan</label>
            <div class="input-group col-xs-5">
              <textarea style="resize:none" name="deskripsi" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat" rows="4">{{ $data_kegiatan -> deskripsi }}</textarea>
            </div>
        </div>

      <div class="form-group">
          <label>Tanggal Kegiatan :</label>
            <div class="input-group col-xs-3">
              <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              <input name="tanggal" type="date" id="date" class="form-control" value="{{ $data_kegiatan -> tanggal }}">
          </div>
        </div>

        <div class="form-group">
          <label for="tempat"> Tempat Kegiatan </label>
            <div class="input-group col-xs-3">
              <input name="tempat" type="text" class="form-control" id="InputKegiatan" value="{{ $data_kegiatan->tempat }}">
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Foto Kegiatan</label>
            <img src="{{ asset('/data_kegiatan/'.$data_kegiatan -> foto)}}" id="foto_preview" style="height: 200px; width: 200px; display: block;">
            <input type="file" name="foto" id="foto">
        </div>

      </div>

      <div class="modal-footer">
        <a href="/admin/kegiatan" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </div>
      </form>
              <!-- /.box-body -->
            </form>
          </div>
          </div>
          <!-- /.box -->
@endsection