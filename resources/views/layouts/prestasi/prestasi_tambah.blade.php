@extends('layouts.app')

@section('content')

<section class="content-header">
            <h1 class="box-title">Input Data
                <small>Masukkan Data Prestasi Yang akan di Post</small>
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
            
                  <div class="form-group">

                    <div class="form-group">  
                      <label>Nama :</label>
                      <div class="input-group col-xs-3">
                        <input type="text" class="form-control " placeholder="Enter ...">
                      </div>
                    </div>
              
                    <div class="form-group">
                      <label>Tanggal Lahir :</label>
                        <div class="input-group col-xs-3">
                          <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                          <input type="text" class="date form-control">
                      </div>
                    </div>
                <!-- /.input group -->

                <div class="form-group">  
                    <label>Alamat :</label>
                    <div class="input-group col-xs-3">
                        <input type="text" class="form-control " placeholder="Enter ...">
                    </div>
                </div>
              
              <div class="form-group">
                  <label for="exampleInputFile">Foto Kegiatan</label>
                  <input type="file" id="exampleInputFile">
              </div>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </div>
          </div>
</div>
</div>


          <!-- /.box -->
          @endsection