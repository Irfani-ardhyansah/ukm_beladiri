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
                                    <a href="/">
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
              <form action="/registerBaru/tambah" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input name="nama_anggota" type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Nama" value="{{ old('nama_anggota') }}">
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea style="resize:none" name="alamat" class="form-control" id="InputAlamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Alamat"  rows="2" value="{{ old('alamat') }}">{{old('alamat')}}</textarea>
        </div>

        <div class="form-group">
                  <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="InputKel">
                        <option>Pria</option>
                        <option>Wanita</option>
                      </select>
                  </div>

                  <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control" id="InputAgama">
                      <option>Islam</option>
                      <option>Kristen Katolik</option>
                      <option>Kristen Protestan</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                      <option>Kong Hu Cu</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>No. Telp.</label>
                      <div class="input-group">
                        <input name="no_hp" type="text" class="form-control" id="InputTelp" data-inputmask='"mask": "(999) 999-9999"' required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="081xxxxxxxxx" value="{{ old('no_hp') }}">
                      </div>
                    </div>

                  <div class="form-group">
                    <label>Angkatan</label>
                    <input id="angkatan" type="number" maxlength="4" class="form-control" name="angkatan"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Tahun Angkatan" value="{{ old('angkatan') }}">
                    <label><small>*Tahun</small></label>
                  </div>
                  
                  <div class="form-group">
                  <label>Status</label>
                      <select name="status" class="form-control" id="InputStat">
                        <option>Aktif</option>
                        <option>Alumni</option>
                      </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="foto">Foto Anggota</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <img id="file_preview" class="profile-user-img img-responsive" style="height: 150px; width: 150px; display: block;">
                        <input name="file" type="file"  id="file">
                          @if ($errors->has('file'))
                            <div class="alert alert-danger">Terjadi Kesalahan Saat Upload!</div>
                          @endif
                      </div>
                    <label><small>*Max Ukuran foto 2MB</small></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kta">Scan KTA</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="kta" type="file" class="custom-file-input" id="InputKta">
                        @if ($errors->has('kta'))
                            <div class="alert alert-danger">Terjadi Kesalahan Saat Upload!</div>
                          @endif
                      </div>
                      <label><small>*Max Ukuran Scan 2MB</small></label>
                    </div>
                  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-custom btn-success">Tambah Data</button>
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