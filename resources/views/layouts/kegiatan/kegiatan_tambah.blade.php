@extends('layouts.app')

@section('content')

<section class="content-header">
            <h1 class="box-title">Data Kegiatan
                <small>Masukkan Data Kegiatan Yang akan di Post</small>
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

                  <!-- input nama kegiatan -->
                    <div class="form-group">  
                      <label>Nama Kegiatan :</label>
                      <div class="input-group col-xs-3">
                        <input type="text" class="form-control " placeholder="Enter ...">
                      </div>
                    </div>
              
                    <!-- input tanggal kegiatan -->
                    <div class="form-group">
                      <label>Tanggal Kegiatan :</label>
                        <div class="input-group col-xs-3">
                          <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                          <input type="text" class="date form-control">
                      </div>
                    </div>

              <!-- input deskripsi kegiatan -->
              <div class="form-group">
                  <label for="Desc">Deskripsi Kegiatan :</label> <br>
                    <textarea id="desc_keg" name="editor1" rows="10" cols="80" placeholder="Deskripsi Kegiatan....">

                    </textarea>
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