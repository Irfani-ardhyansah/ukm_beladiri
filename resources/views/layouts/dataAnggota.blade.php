@extends('layouts.app')


@section('content')    


     <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Data Anggota UKM Bela Diri PSHT IAIN Ponorogo</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/beranda">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Data Anggota</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=====================================
=            Full Width Blog            =
======================================-->
<section id="blog-full-width">
    <div class="container" >
    <div class="row">
         <div class="col-sm-12" >
         <div class="pull-left">
                   <form class="form-inline float-right" action="/anggota/cari" method="GET">
              <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari..." aria-label="Cari" value="{{ old('cari') }}">
              <button class="btn btn-custom btn-warning my-2 my-sm-0 mr-2" type="submit" value="cari">Cari</button>
            </form>
               </div>  
               <div style="width: 100%; text-align: right; margin-bottom: 10px;">
                <a href="#" class="on-default edit-row btn btn-custom btn-success" data-toggle="modal" data-target="#custom-width-modal"
                onClick="ResetInput()">Tambah Data <i class="fa fa-plus"></i></a>
            </div>
                 <div class="card-box table-responsive">            
                          
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Angkatan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                                </tr>
                                </thead>

                                <tbody>
                <tr>
                  <td>1</td>
                  <td>Adi Rohman</td>
                  <td>Ponorogo</td>
                  <td>2019</td>
                  <td class="project-state">
                      <span class="btn  btn-xs btn-rounded btn-info disabled">Aktif</span></td>
                  <td>
                      <a href="/info" data-toggle='modal' data-target='#custom-width-modal'class="on-default edit-row btn btn-block btn-custom btn-info">Info</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Bagus Mariano</td>
                  <td>Ponorogo</td>
                  <td>2019</td>
                  <td class="project-state">
                      <span class="btn  btn-xs btn-rounded btn-info disabled">Aktif</span></td>
                  <td>
                      <a href="/info"data-toggle='modal' data-target='#custom-width-modal' class="on-default edit-row btn btn-block btn-custom btn-info">Info</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nur Rofiq</td>
                  <td>Ponorogo</td>
                  <td>2019</td>
                  <td class="project-state">
                      <span class="btn  btn-xs btn-rounded btn-info disabled">Aktif</span></td>
                  <td>
                      <a href="/info" data-toggle='modal' data-target='#custom-width-modal'class="on-default edit-row btn btn-block btn-custom btn-info">Info</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Afa Lathifah</td>
                  <td>Ponorogo</td>
                  <td>2015</td>
                  <td class="project-state">
                      <span class="btn  btn-xs btn-rounded btn-danger disabled">Tidak Aktif</span></td>
                  <td>
                      <a href="/info" data-toggle='modal' data-target='#custom-width-modal' class="on-default edit-row btn btn-block btn-custom btn-info">Info</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Gilang Fathur</td>
                  <td>Ponorogo</td>
                  <td>2016</td>
                  <td class="project-state">
                      <span class="btn btn-xs btn-rounded btn-danger disabled">Tidak Aktif</span></td>
                  <td>
                      <a href="/info" data-toggle='modal' data-target='#custom-width-modal' class="on-default edit-row btn btn-block btn-custom btn-info">Info</a></td>
                </tr>
                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


    </div>
</section>

<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Tambah Data</h4>
            </div>
             <form action= method="post" class="form-horizontal" role="form">
                <div class="modal-body">                                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                        </div>
                    </div>                                  
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="jenis" name="jenis" required></textarea>
                        </div>
                    </div>                                  
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jenis Kelamin</label>
                        <div class="col-md-4">
                        <div class="radio radio-info">
		                              <input type="radio" name="radio" id="radio4" value="option4">
		                                                    <label for="radio4">
		                                                      Laki-laki
		                                                    </label>
		                                                </div>
		                                                <div class="radio radio-pink">
		                                                    <input type="radio" name="radio" id="radio5" value="option5">
		                                                    <label for="radio5">
		                                                       Perempuan
		                                                    </label>
		                                                </div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Agama</label>
                        <div class="col-md-4">
                        <select class="form-control">
                      <option>Islam</option>
                      <option>Kristen Katolik</option>
                      <option>Kristen Protestan</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                      <option>Kong Hu Cu</option>
                    </select>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">No. Telp</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="stok" name="stok" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-4">
                        <div class="radio radio-success">
		                                                    <input type="radio" name="aktif" id="radio8" value="option8">
		                                                    <label for="radio8">
		                                                        Aktif
		                                                    </label>
		                                                </div>
		                                                <div class="radio radio-danger">
		                                                    <input type="radio" name="tidakAktif" id="radio9" value="option9">
		                                                    <label for="radio9">
		                                                       Tidak Aktif
		                                                    </label>
		                                                </div>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-custom btn-primary waves-effect waves-light">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 

@endsection