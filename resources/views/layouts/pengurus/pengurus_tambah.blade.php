@extends('layouts.app')

@section('content')

<section class="content-header">
            <h1 class="box-title">Input Data
                <small>Masukkan Data Pengurus Yang akan di Post</small>
            </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>

                  <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control">
                      <option>Ketua</option>
                      <option>Wakil Ketua</option>
                      <option>Bendahara I</option>
                      <option>Bendahara II</option>
                      <option>Sekertaris I</option>
                      <option>Sekertaris II</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas">
                  </div>

                  <div class="form-group">
                  <label>No. Telp.</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="" class="btn btn-primary">Tambah</a>
                  <a href="" class="btn btn-danger">Reset</a>
                  <a href="/pengurus" class="btn btn-success">Cancel</a>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content-wrapper -->

          <!-- /.box -->
          @endsection