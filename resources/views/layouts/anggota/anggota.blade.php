@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center">
        Data Anggota UKM
        <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#anggotaModal"><i class="fa fa-plus"></i></button>
        <a href="/admin/anggota/export_excel" class="btn btn-primary btn-sm pull-left" target="_blank">EXPORT</a>
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
            

<!-- Anggota Modal -->
<div class="modal fade" id="anggotaModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Anggota</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
      <form action="/admin/anggota/tambah" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input name="nama_anggota" type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ old('nama_anggota') }}" placeholder="Masukkan Nama">
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea style="resize:none" name="alamat" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ old('alamat') }}" rows="2"></textarea>
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
              <input name="no_hp" type="number" class="form-control" id="InputTelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"  placeholder="081xxxxxxxxx" value="{{ old('no_hp') }}" data-mask>
            </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <label>Angkatan</label>
              <input id="angkatan" type="number" maxlength="4" class="form-control" name="angkatan"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"  placeholder="Tahun Angkatan" value="{{ old('angkatan') }}">
          </div>
          <label><small>*tahun</small></label>
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
                <label class="custom-file-label" for="foto"><small>*max ukuran foto 2MB</small></label>
              </div>
            </div>
        </div>

        <div class="form-group">
          <label for="kta">Scan KTA</label>
          <div class="input-group">
            <div class="custom-file">
              <input name="kta" type="file" class="custom-file-input" id="kta">
              @if ($errors->has('kta'))
                <div class="alert alert-danger">Terjadi Kesalahan Saat Upload!</div>
              @endif
              <label class="custom-file-label" for="kta"><small>*max ukuran scan KTA 2MB</small></label>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Tambah Data</button>
      </div>
      </form>
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
            
              <table id="table-anggota" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Angkatan</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                  </td>
                  <td>
                </tr>
                </tbody>
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

    <!-- <script type="text/javascript">
    $(function() {
        var oTable = $('#table-anggota').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": '{{url("admin/data-anggota")}}',
            "columns": [
                {data: 'nama_anggota', name:'nama_anggota'},
                {data: 'alamat', name:'alamat'},
                {data: 'angkatan', name:'angkatan'},
                {data: 'status', name:'status', orderable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });
    });
</script> -->

  @endsection
