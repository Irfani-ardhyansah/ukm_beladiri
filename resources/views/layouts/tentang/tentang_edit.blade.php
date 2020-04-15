@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Form Edit tentang
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
            <form method="POST" action="/admin/tentang/update/{{ $data_tentang->id_tentang }}" enctype="multipart/form-data">

      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="col-md-6">
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
            <div class="input-group col-xs-10">
            <textarea name="deskripsi" style="resize:none" class="form-control" id="deksripsi" placeholder="Masukkan Deskripsi" rows="2">{{ $data_tentang->deskripsi }}</textarea>
            </div>
          </div>
        </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="sejarah">Sejarah</label>
            <div class="input-group col-xs-10">
              <textarea name="sejarah" style="resize:none" class="form-control" id="sejarah" placeholder="Masukkan Sejarah" rows="2">{{ $data_tentang->sejarah }}</textarea>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="lokasi">Lokasi</label>
            <div class="input-group col-xs-10">
              <textarea name="lokasi" style="resize:none" class="form-control" id="lokasi" placeholder="Masukkan Lokasi Latihan" rows="2">{{ $data_tentang->lokasi }}</textarea>
            </div>
          </div>
        </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="jadwal">Jadwal</label>
            <div class="input-group col-xs-10">
              <textarea name="jadwal" style="resize:none" class="form-control" id="jadwal" placeholder="Masukkan Jadwal Latihan" rows="2">{{ $data_tentang->jadwal }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Data</button>
      </div>
      </form>
              <!-- /.box-body -->
            </form>
          </div>
          </div>
          <!-- /.box -->
@endsection