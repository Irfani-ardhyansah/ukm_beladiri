
@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Prestasi Anggota
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
            <button type="button" class="btn btn-success float-right btn-sm" data-toggle="modal" data-target="#prestasiModal"><i class="fa fa-plus"></i></button>
            </div>

            <!-- Kegiatan Modal -->
            <div class="modal fade" id="prestasiModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Pretasi</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                <div class="modal-body">
                  
                  <form action="/admin/prestasi/tambah" method="POST">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <label for="nama_kegiatan">Nama Kejuaraan </label>
                    <input name="nama_event" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Nama Kejuaraan">
                  </div>

                  <div class="form-group">
                    <label>Tingkat Kejuaraan</label>
                    <select name="tingkat" class="form-control" id="InputAgama">
                      <option>Nasional</option>
                      <option>Provinsi</option>
                      <option>Kabupaten/Kota</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="nama_kegiatan">Nama Peraih </label>
                    <input name="nama_peraih" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Nama Peraih">
                  </div>

                  <div class="form-group">
                    <label>Keterangan</label>
                    <select name="keterangan" class="form-control" id="InputAgama">
                      <option>Peringkat I</option>
                      <option>Peringkat II</option>
                      <option>Peringkat III</option>
                      <option>Harapan I</option>
                      <option>Harapan II</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" id="InputAgama">
                      <option>Tunggal</option>
                      <option>Ganda</option>
                      <option>Beregu</option>
                      <option>Harapan I</option>
                      <option>Harapan II</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kategori Kejuaraan Seni</label>
                    <select name="kategori" class="form-control" id="InputAgama">
                      <option>Tunggal Putra</option>
                      <option>Tunggal Putri</option>
                      <option>Ganda Putra</option>
                      <option>Ganda Putri</option>
                      <option>Beregu</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kelas Kejuaraan Laga</label>
                    <select name="kelas" class="form-control" id="InputAgama">
                      <option>Kelas A Putra</option>
                      <option>Kelas B Putra</option>
                      <option>Kelas C Putra</option>
                      <option>Kelas D Putra</option>
                      <option>Kelas E Putra</option>
                      <option>Kelas F Putra</option>
                      <option>Kelas G Putra</option>
                      <option>Kelas H Putra</option>
                      <option>Kelas I Putra</option>
                      <option>Kelas J Putra</option>
                      <option>Kelas Bebas Putra</option>
                      <option>Kelas A Putri</option>
                      <option>Kelas B Putri</option>
                      <option>Kelas C Putri</option>
                      <option>Kelas D Putri</option>
                      <option>Kelas E Putri</option>
                      <option>Kelas F Putri</option>
                      <option>Kelas G Putri</option>
                      <option>Kelas H Putri</option>
                      <option>Kelas I Putri</option>
                      <option>Kelas J Putri</option>
                      <option>Kelas Bebas Putri</option>
                    </select>
                  </div>

              
                  <div class="form-group">
                    <label>Tahun Kejuaraan</label>
                    <input id="angkatan" type="number" maxlength="4" class="form-control" name="tahun"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ old('tahun') }}">
                  </div>

                  <!-- <div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="foto" type="file" class="custom-file-input" id="InputFoto">
                        <label class="custom-file-label" for="foto">Pilih File</label>
                      </div>
                    </div>
                  </div> -->

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
            </div> -->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Kejuaraan</th>
                  <th>Nama Peraih</th>
                  <th>Tingkat</th>
                  <th>Kelas</th>
                  <th>Keterangan</th>
                  <th>Tahun</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                @foreach ($data_prestasi as $data)
                <tbody>
                <tr>
                  <td>{{ $loop -> iteration }}</td>
                  <td>{{ $data -> nama_event }}</td>
                  <td>{{ $data -> nama_peraih }}</td>
                  <td>{{ $data -> tingkat }}</td>
                  <td>{{ $data -> kelas }}</td>
                  <td>{{ $data -> keterangan }}</td>
                  <td>{{ $data -> tahun }}</td>
                  <td><a href="/admin/prestasi/edit/{{ $data -> id_prestasi }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <a href="/admin/prestasi/hapus/{{ $data -> id_prestasi }}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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
