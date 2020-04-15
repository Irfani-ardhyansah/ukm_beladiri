@extends('user.app')

@section('content')    
<link href="{{ asset ('ubold/tema/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{ asset ('ubold/tema/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{ asset ('ubold/tema/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{ asset ('ubold/tema/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('ubold/tema/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{ asset ('ubold/tema/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

        <link href="{{ asset ('ubold/tema/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Registrasi Anggota</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/beranda">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Registrasi Anggota</li>
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
<div class="container">
<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Lengkapi Data Di Bawah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
                  </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                  <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="lakilaki">
                      <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="perempuan" >
                      <label class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                    <label>Agama</label>
                    <select class="form-control">
                      <option>Islam</option>
                      <option>Kristen Katolik</option>
                      <option>Kristen Protestan</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                      <option>Kong Hu Cu</option>
                    </select>
                  </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                  <label>No. Telp.</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
                </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                    <label>Angkatan</label>
                    <select class="form-control">
                      <option>2000</option>
                      <option>2001</option>
                      <option>2002</option>
                      <option>2003</option>
                      <option>2004</option>
                      <option>2005</option>
                      <option>2006</option>
                      <option>2007</option>
                      <option>2008</option>
                      <option>2009</option>
                      <option>2010</option>
                      <option>2011</option>
                      <option>2012</option>
                      <option>2013</option>
                      <option>2014</option>
                      <option>2015</option>
                      <option>2016</option>
                      <option>2017</option>
                      <option>2018</option>
                      <option>2019</option>
                    </select>
                  </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                  <label>Status</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="aktif">
                      <label class="form-check-label">Aktif</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="tidakaktif" >
                      <label class="form-check-label">Tidak Aktif</label>
                    </div>
                  </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                    <label for="foto">Foto Anggota</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto">
                       
                      </div>
                    </div>
                  </div>
                  <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                    <label for="kta">Scan KTA</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="kta">
                      
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah</button>
                  <button type="submit" class="btn btn-secondary">Reset</button>
                  <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
            </div>
</section>




@endsection