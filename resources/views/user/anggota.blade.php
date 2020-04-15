@extends('user.app')


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
                                    <a href="/">
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
         <div class="block wow fadeInDown" data-wow-delay=".3s">
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

                @foreach($data_anggota as $anggota)
                <tbody>
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $anggota -> nama_anggota }}</td>
                    <td>{{ $anggota -> alamat }}</td>
                    <td>{{ $anggota -> angkatan }}</td>
                    <td>
                    @if($anggota -> status == "Aktif")
                        <span class="label label-success">{{$anggota -> status}}</span>
                    @else($anggota -> status == "Alumni")
                        <span class="label label-danger">{{$anggota -> status}}</span>
                    @endif
                    </td>
                    <td>
                    <a href="/anggota/info/{id_anggota}" data-toggle='modal' data-target='#info-modal'class="on-default edit-row btn btn-block btn-custom btn-info">Info</a></td>
                    </td>
                @endforeach
                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>


    </div>
</section>

<!-- Tambah Modal -->
<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:40%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Tambah Data</h4>
            </div>
            
             <form action="/anggota/tambah" method="post" class="form-horizontal" role="form">
             {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="namaBarang" name="nama_anggota" required>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-9">
                            <textarea style="resize:none" class="form-control" id="jenis" name="alamat" required></textarea>
                        </div>
                    </div>               

                    <div class="form-group">
                        <label class="col-md-3 control-label">Jenis Kelamin</label>
                        <div class="col-md-4">
                            <select name="jenis_kelamin" class="form-control" id="InputKel">
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                    </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label">Agama</label>
                        <div class="col-md-4">
                        <select name="agama" class="form-control">
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
                            <input type="text" class="form-control" id="stok" name="no_hp" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Angkatan</label>
                            <div class="col-md-4">
                                <select name="angkatan" class="form-control" id="InputAngkatan">
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
                  </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-4">
                            <select name="status" class="form-control" id="InputStat">
                                <option>Aktif</option>
                                <option>Alumni</option>
                            </select>
                        </div>
                  </div>

                  <div class="form-group">
                    <label for="foto" class="col-md-3 control-label">Foto Anggota</label>
                    <div class="col-md-4">
                        <div class="input-group">
                        <div class="custom-file">
                            <img width="200" height="200" />
                            <input name="foto_anggota" type="file" class="uploads form-control" id="foto_anggota">
                            <label class="custom-file-label" for="foto">Pilih File</label>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kta" class="col-md-3 control-label">Scan KTA</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="kta" type="file" class="custom-file-input" id="InputKta">
                                <label class="custom-file-label" for="kta">Pilih File</label>
                            </div>
                            </div>
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

 <!-- Info Modal -->
 <div id="info-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Info Pengurus</h4>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection