

@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengurus UKM
      </h1>
    </section>

    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Diinput!
    </div>
    @endif

    @if(session('hapus'))
    <div class="alert alert-danger" role="alert">
      Data Berhasil Dihapus!
    </div>
    @endif

    <!-- Main content -->
    <section class="content ml-2">
          <div class="box float-left">
            <!-- /.box-header -->
            <div class="box-body">
            
            <!-- tambah form -->
            <!-- <div class="pull-right">
            <button type="button" class="btn btn-success float-right btn-sm" data-toggle="modal" data-target="#pengurusModal"><i class="fa fa-plus"></i></button>
            </div> -->

            
            
<!-- pengurus Modal -->
<div class="modal fade" id="pengurusModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Pengurus</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
      <form action="/admin/pengurus/tambah" method="POST">
      {{ csrf_field() }}

        <div class="form-group">
          <label for="nama">Nama</label>
          <input name="nama_pengurus" type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama">
        </div>

        <div class="form-group">
            <label>Jabatan</label>
            <select name="jabatan" class="form-control" id="InputAgama">
              <option>Ketua</option>
              <option>Wakil</option>
              <option>Sekertaris I</option>
              <option>Sekertaris II</option>
              <option>Bendahara I</option>
              <option>Bendahara II</option>
            </select>
          </div>

                  <div class="form-group">
                    <label>Angkatan</label>
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

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea style="resize:none" name="alamat" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat" rows="2"></textarea>
                  </div>

                  <div class="form-group">
                    <label>No. Telp.</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input name="noHP" type="text" class="form-control" id="InputTelp" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                      </div>
                    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Update Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<!--             
            <div class="pull-right">
            <form class="form-inline float-right" action="/anggota/cari" method="GET">
              <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Search" aria-label="Search" value="{{ old('cari') }}">
              <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" value="cari">Search</button>
            </form>
            </div> -->
            
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Angkatan</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                @foreach($data_anggota as $anggota)
                @if($anggota -> jabatan == 'Ketua')
                <tbody>
                <tr>
                  <td><img class="profile-user-img img-responsive" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$anggota->file)}}" alt="User profile picture"></td>
                  <td>{{ $anggota -> nama_anggota }}</td>
                  <td>{{ $anggota -> jabatan }}</td>
                  <td>{{ $anggota -> angkatan }}</td>
                  <td>{{ $anggota -> alamat }}</td>
                  <td>{{ $anggota -> no_hp }}</td>
                  <td><a href="/admin/anggota/edit/{{ $anggota -> id_anggota }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <form action="/admin/pengurus/{{ $anggota -> id_anggota }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </form>
                      <a href="/admin/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a></td>
                </tr>
                </tbody>
                @endif
                @endforeach

                @foreach($data_anggota as $anggota)
                @if($anggota -> jabatan == 'Wakil')
                <tbody>
                <tr>
                  <td><img class="profile-user-img img-responsive" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$anggota->file)}}" alt="User profile picture"></td>
                  <td>{{ $anggota -> nama_anggota }}</td>
                  <td>{{ $anggota -> jabatan }}</td>
                  <td>{{ $anggota -> angkatan }}</td>
                  <td>{{ $anggota -> alamat }}</td>
                  <td>{{ $anggota -> no_hp }}</td>
                  <td><a href="/admin/anggota/edit/{{ $anggota -> id_anggota }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <form action="/admin/pengurus/{{ $anggota -> id_anggota }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </form>
                      <a href="/admin/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a></td>
                </tr>
                </tbody>
                @endif
                @endforeach

                @foreach($data_anggota as $anggota)
                @if($anggota -> jabatan == 'Sekertaris I')
                <tbody>
                <tr>
                <td><img class="profile-user-img img-responsive" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$anggota->file)}}" alt="User profile picture"></td>
                  <td>{{ $anggota -> nama_anggota }}</td>
                  <td>{{ $anggota -> jabatan }}</td>
                  <td>{{ $anggota -> angkatan }}</td>
                  <td>{{ $anggota -> alamat }}</td>
                  <td>{{ $anggota -> no_hp }}</td>
                  <td><a href="/admin/anggota/edit/{{ $anggota -> id_anggota }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <form action="/admin/pengurus/{{ $anggota -> id_anggota }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </form>
                      <a href="/admin/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a></td>
                </tr>
                </tbody>
                @endif
                @endforeach

                @foreach($data_anggota as $anggota)
                @if($anggota -> jabatan == 'Sekertaris II')
                <tbody>
                <tr>
                <td><img class="profile-user-img img-responsive" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$anggota->file)}}" alt="User profile picture"></td>
                  <td>{{ $anggota -> nama_anggota }}</td>
                  <td>{{ $anggota -> jabatan }}</td>
                  <td>{{ $anggota -> angkatan }}</td>
                  <td>{{ $anggota -> alamat }}</td>
                  <td>{{ $anggota -> no_hp }}</td>
                  <td><a href="/admin/anggota/edit/{{ $anggota -> id_anggota }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <form action="/admin/pengurus/{{ $anggota -> id_anggota }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </form>
                      <a href="/admin/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a></td>
                </tr>
                </tbody>
                @endif
                @endforeach

                @foreach($data_anggota as $anggota)
                @if($anggota -> jabatan == 'Bendahara I')
                <tbody>
                <tr>
                <td><img class="profile-user-img img-responsive" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$anggota->file)}}" alt="User profile picture"></td>
                  <td>{{ $anggota -> nama_anggota }}</td>
                  <td>{{ $anggota -> jabatan }}</td>
                  <td>{{ $anggota -> angkatan }}</td>
                  <td>{{ $anggota -> alamat }}</td>
                  <td>{{ $anggota -> no_hp }}</td>
                  <td><a href="/admin/anggota/edit/{{ $anggota -> id_anggota }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <form action="/admin/pengurus/{{ $anggota -> id_anggota }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </form>
                      <a href="/admin/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a></td>
                </tr>
                </tbody>
                @endif
                @endforeach

                @foreach($data_anggota as $anggota)
                @if($anggota -> jabatan == 'Bendahara II')
                <tbody>
                <tr>
                <td><img class="profile-user-img img-responsive" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$anggota->file)}}" alt="User profile picture"></td>
                  <td>{{ $anggota -> nama_anggota }}</td>
                  <td>{{ $anggota -> jabatan }}</td>
                  <td>{{ $anggota -> angkatan }}</td>
                  <td>{{ $anggota -> alamat }}</td>
                  <td>{{ $anggota -> no_hp }}</td>
                  <td><a href="/admin/anggota/edit/{{ $anggota -> id_anggota }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                      <form action="/admin/pengurus/{{ $anggota -> id_anggota }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </form>
                      <a href="/admin/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a></td>
                </tr>
                </tbody>
                @endif
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
