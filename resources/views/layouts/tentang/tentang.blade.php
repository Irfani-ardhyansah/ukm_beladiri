@extends('layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Menu Tentang
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
            <!-- <div class="pull-right">
            <button type="button" class="btn btn-success float-right btn-sm" data-toggle="modal" data-target="#prestasiModal"><i class="fa fa-plus"></i></button>
            </div> -->

            <!-- Kegiatan Modal -->
            <div class="modal fade" id="prestasiModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Tentang</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                <div class="modal-body">
                  
                  <form action="/admin/tentang/tambah" method="POST">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <label for="desc">Deskripsi </label>
                    <input name="deskripsi" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Deskripsi UKM">
                  </div>

                  <div class="form-group">
                    <label for="sejarah">Sejarah</label>
                    <input name="sejarah" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Sejarah UKM">
                  </div>

                  <div class="form-group">
                    <label for="loc">Lokasi </label>
                    <input name="lokasi" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Lokasi UKM">
                  </div>

                  <div class="form-group">
                    <label for="jadwal">Jadwal </label>
                    <input name="jadwal" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Jadwal Latihan UKM">
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
                  <th>Deskripsi</th>
                  <th>Sejarah</th>
                  <th>Lokasi</th>
                  <th>Jadwal</th>
                </tr>
                </thead>
                @foreach ($data_tentang as $data)
                <tbody>
                <tr>
                  <td><a href="/admin/tentang/edit/{{ $data -> id_tentang }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a></td>
                  <td>{{ $data -> deskripsi }}</td>
                  <td>{{ $data -> sejarah }}</td>
                  <td>{{ $data -> lokasi }}</td>
                  <td>{{ $data -> jadwal }}</td>
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