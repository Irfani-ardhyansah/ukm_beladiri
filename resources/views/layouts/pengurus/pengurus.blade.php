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
